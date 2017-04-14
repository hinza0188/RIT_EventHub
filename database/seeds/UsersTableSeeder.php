<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'first_name'=> str_random(4),
            'last_name'=> str_random(6),
            'email'    => str_random(3).(string)rand(1000,9999).'@rit.edu',
            'phone_number' => (string)rand(100,999).'-'.(string)rand(100,999).'-'.(string)rand(1000,9999),
            'password' => bcrypt('p@ssword')
        ]);
        DB::table('users')->insert([
            'first_name'=> 'admin',
            'last_name'=> 'admin',
            'email'    => 'admin@rit.edu',
            'phone_number' => (string)rand(100,999).'-'.(string)rand(100,999).'-'.(string)rand(1000,9999),
            'password' => bcrypt('p@ssword')
        ]);
    }
}
