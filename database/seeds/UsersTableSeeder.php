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
        for ($i=0; $i>299; $i++){
            DB::table('users')->insert([
                'first_name'=> str_random(4),
                'last_name'=> str_random(6),
                'email'    => str_random(3).rand(1000,9999).'@rit.edu',
                'password' => bcrypt('password')
            ]);
        }
    }
}
