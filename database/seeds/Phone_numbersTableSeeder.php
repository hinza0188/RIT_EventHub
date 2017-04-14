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
            'number'=> (integer)((string)(rand(100,999)).(string)(rand(100,999)).(string)(rand(1000,9999))),
            'user_id'=> 1
        ]);

    }
}
