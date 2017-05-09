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
            'first_name'=> "Dave",
            'last_name'=> "Persona",
            'email'    => 'admin@rit.edu',
            'password' => bcrypt('password')
        ]);
    }
}
