<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call ( UserTableSeeder :: class );
        $this -> call ( AuthorsTableSeeder :: class );
        $this -> call ( BooksTableSeeder :: class );
        $this -> call ( ImagesTableSeeder :: class );
        $this -> call ( OrdersTableSeeder :: class );


    }
}
