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
                'title'=> 'Test Event',
                'description'=> str_random(200),
                'location'    => str_random(10),
                'imgURL' => 'images/event_images/default.png',
                'date' => date(Carbon::today()),
                'creator_id' => ($i),
            ));
        }

    }
}
