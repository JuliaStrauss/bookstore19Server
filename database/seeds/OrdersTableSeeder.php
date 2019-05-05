<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = new \App\Order;
        $order1->netAmount = "17.98";
        $order1->state = 0;
        $order1->save();

        $orderlog1 = new \App\Orderlog();
        $orderlog1->adminComment = "Neue Bestellung abgeschickt";
        $orderlog1->comment = "Neue Bestellung";
        $orderlog1->username = 'admin';
        $order1->orderlogs()->save($orderlog1);

        $book1 = App\Book::where('isbn', '123456789')->get();
        $book2 = App\Book::where('isbn', '1234567810')->get();
        $order1->books()->sync($book1, $book2);
        $order1->save();

        $order1->user_id = "2";
        $order1->save();


        $order2 = new \App\Order;
        $order2->netAmount = "29.99";
        $order2->state = 0;
        $order2->save();

        $orderlog2 = new \App\Orderlog();
        $orderlog2->adminComment = "Neue Bestellung abgeschickt";
        $orderlog2->comment = "Neue Bestellung";
        $orderlog2->username = 'admin';
        $order2->orderlogs()->save($orderlog1);

        $book3 = App\Book::where('isbn', '1234567813')->get();
        $order2->books()->sync($book3);
        $order2->save();

        $order2->user_id = "2";
        $order2->save();


    }
}
