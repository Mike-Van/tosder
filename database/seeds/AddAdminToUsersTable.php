<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddAdminToUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'firstName' => "admin",
            'lastName' => "admin",
            'about' => 'Im the admin of this site',
            'email' => "admin@tosder.com",
            'username' => "admin",
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'phone' => '564789123'
        ]);
    }
}
