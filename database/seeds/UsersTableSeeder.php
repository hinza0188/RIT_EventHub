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
            'first_name'=> 'Dave',
            'last_name'=> '3.2',
            'email'    => 'admin@rit.edu',
            'password' => bcrypt('p@ssword')
        ]);
    }
}
