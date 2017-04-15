<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('events')->insert(array(
            'title'=> 'Test Event',
            'description'=> str_random(200),
            'location'    => str_random(10),
            'imgURL' => 'images/event_images/1.png',
            'date' => date(\Carbon\Carbon::now()),
            'creator_id' => (1),
        ));
    }
}