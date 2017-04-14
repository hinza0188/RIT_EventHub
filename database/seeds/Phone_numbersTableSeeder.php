<?php

use Illuminate\Database\Seeder;

class Phone_numbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('phone_numbers')->insert([
            'name' => 'Home',
            'number'=> '('.(string)(rand(100,999)).') '.(string)(rand(100,999)).' - '.(string)(rand(1000,9999)),
            'user_id'=> 1
        ]);
        DB::table('phone_numbers')->insert([
            'name' => 'Mobile',
            'number'=> '('.(string)(rand(100,999)).') '.(string)(rand(100,999)).' - '.(string)(rand(1000,9999)),
            'user_id'=> 1
        ]);
    }
}
