<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i=0; $i<100; $i++) {
            DB::table('events')->insert(array(
                'title'=> 'Test Event '.str_random(3),
                'description'=> str_random(30),
                'location'    => str_random(10),
                'imgURL' => 'images/event_images/default.png',
                'max' => rand(1,40),
                'date' => date(Carbon::today()),
                'creator_id' => ($i),
            ));
        }

    }
}
