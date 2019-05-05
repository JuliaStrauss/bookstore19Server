<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Autor 1 = JK Rowling
        $a1 = new \App\Author();
        $a1->firstName = "J.K.";
        $a1->lastName = "Rowling";
        $a1->save();

        //Autor 2 = JRR Tolkien
        $a2 = new \App\Author();
        $a2->firstName = "J. R. R.";
        $a2->lastName = "Tolkien";
        $a2->save();

        //Autor 3 = GRR Martin
        $a3 = new \App\Author();
        $a3->firstName = "George R. R";
        $a3->lastName = "Martin";
        $a3->save();
    }
}