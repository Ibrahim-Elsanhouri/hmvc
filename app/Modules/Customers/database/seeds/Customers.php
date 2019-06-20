<?php

use Illuminate\Database\Seeder;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
'name' => 'Ibrahim Elsanhouri' , 
'email' => 'ibrahimelsanhouri@gmail.com' , 
'password' => bcrypt(123456)
        ]);
    }
}
