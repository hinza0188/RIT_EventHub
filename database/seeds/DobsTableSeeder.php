<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dobs')->insert([
            'date'=> Carbon::today(),
            'user_id'=>1,
        ]);
    }
}
