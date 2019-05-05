<?php

namespace App\Http\Controllers;

use App\Book;
use App\Order;
use App\Orderlog;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    //ALLE BÜCHER ANZEIGEN
    public function index() {
        $orders = Order::with(['books', 'orderlogs', 'user'])->get();
        return $orders;
    }

    //EINE BESTIMMTE ORDER WIRD ANGEZEIGT
    public function findOrderbyID (int $id) {
        $order = Order::where('id', $id)
            ->with(['books', 'orderlogs', 'user'])
            ->first();
        return $order;
    }

    //NEUE ORDER SPEICHERN
    public function save(Request $request) : JsonResponse{
        $request = $this->parseRequest($request);
        DB::beginTransaction();
        try {
            $order = Order::create($request->all());

            $current_user = User::find($request["user_id"])->lastname;

            $orderlog = Orderlog::create([
                'public_comment' => "Neue Bestellung abgeschickt",
                'comment' => "Neue Bestellung",
                'state' => 0,
                'user_id' => $current_user
            ]);

            $order->orderlogs()->save($orderlog);

            if($request['books'] && is_array($request['books'])){
                $arrayofBooks = [];
                foreach ($request['books'] as $bo){
                    array_push($arrayofBooks, $bo['isbn']);
                }

                foreach ($request['books'] as $bo){
                    $amount = $bo['amount'];
                    $book = Book::firstOrNew([
                        'isbn' => $bo['isbn'],
                        'title' => $bo['title'],
                        'subtitle' => $bo['subtitle'],
                        'published' => $bo['published'],
                        'rating' => $bo['rating'],
                        'description' => $bo['description'],
                        'netAmount' => $bo['netAmount'],
                        'user_id' => $bo['user_id'],
                        'amount' => $bo['amount']
                    ]);

                    $order->books()->save($book, array(
                        'PreisBeiBestellung' => $book['PreisBeiBestellung'],
                        'Menge' => $amount,
                        'Titel' => $book['Titel']
                    ));
                }
            }
            DB::commit();
            return response()->json($order,201);

        }catch (\Exception $e) {
            DB::rollBack();
            return response()->json('Bestellung konnte nicht gespeichert werden!' . $e->getMessage(), 420);
        }
    }

    //STATUS UPDATE
    public function updateOrderlog(Request $request, string $id) : JsonResponse
    {
        DB::beginTransaction();
        try {
            $order = Order::with(['books', 'orderlogs', 'user'])
                ->where('id', $id)->first();

            $order->update($request->all());

            if ($order != null) {
                $request = $this->parseRequest($request);
                $order->state = ($request['state']);
                $order->save;
            }

            $current_user = User::find($request["user_id"])->lastname;

            $orderlog = Orderlog::create([
                'adminComent' => "Der Status wurde geändert",
                'comment' => "Der Status wurde geändert",
                'state' => ($request['state']),
                'username' => $current_user
            ]);


            //assign orderlog to order
            $order->orderlogs()->save($orderlog);

            DB::commit();
            $order1 = Order::with(['books', 'orderlogs', 'user'])
                ->where('id', $id)->first();
            // return a vaild http response
            return response()->json($order1, 201);
        } catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("Bestellung konnte nicht gespeichert werden!" . $e->getMessage(), 420);

        }
    }

    private function parseRequest (Request $request) : Request {
        $date = new \DateTime($request->published);
        $request['published'] = $date;
        return $request;
    }
}
