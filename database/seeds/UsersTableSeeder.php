<?php

use \Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();
        \Illuminate\Foundation\Auth\User::create([
            'name' => 'David Test',
            'email' => 'daxdoxsi2@gmail.com',
            'password' => Hash::make('1234')
        ]);
    }

}