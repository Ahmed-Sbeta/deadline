<?php

use Illuminate\Database\Seeder;
use App\events;

class eventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $event = events::create([
          'title' => 'Designers Meeting',
          'date' => '2022-04-2',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
      $event2 = events::create([
          'title' => 'New Idintaty Meeting',
          'date' => '2022-04-1',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
      $event3 = events::create([
          'title' => 'Three Years Of Mawja',
          'date' => '2022-03-31',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
      $event4 = events::create([
          'title' => 'Activity Day',
          'date' => '2022-04-3',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
    }
}
