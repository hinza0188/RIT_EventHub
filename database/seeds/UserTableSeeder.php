<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
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
            'password' => bcrypt('p@ssword')
        ]);
    }
}
