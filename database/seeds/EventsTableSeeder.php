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
        $date = new Carbon();
        for ($i=0; $i<25; $i++) {
            $randomDays = mt_rand(1,31);
            $date->addDays($randomDays);
            DB::table('events')->insert(array(
                'title'=> 'Test Event '.str_random(3),
                'description'=> str_random(30),
                'location'    => str_random(10),
                'imgURL' => 'images/event_images/default.png',
                'max' => rand(15,40),
                'joined' => rand(1,15),
                'interested' => rand(0,100),
                'date' => $date,
                'creator_id' => ($i),
            ));
        }

    }
}
