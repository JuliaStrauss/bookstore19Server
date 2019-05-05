<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->firstname = 'Test';
        $user->lastname = 'User';
        $user->address = '4020 Linz';
        $user->admin = 1; // = Admin
        $user->email = 'test2@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user = new App\User();
        $user->firstname = 'Julia';
        $user->lastname = 'Strauß';
        $user->address = '4030 Linz';
        $user->admin = 0; // = normaler User
        $user->email = 'julia@test.at';
        $user->password = bcrypt('testsecret');
        $user->save();
    }
}
