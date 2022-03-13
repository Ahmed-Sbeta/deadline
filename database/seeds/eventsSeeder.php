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
          'title' => 'meeting',
          'date' => '2022-03-12',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
      $event2 = events::create([
          'title' => 'meeting',
          'date' => '2022-03-11',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
      $event3 = events::create([
          'title' => 'meeting',
          'date' => '2022-03-10',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '1'
      ]);
      $event4 = events::create([
          'title' => 'meeting',
          'date' => '2022-03-15',
          'from' => '11:00',
          'to' => '12:00',
          'creator' => '4'
      ]);
    }
}
