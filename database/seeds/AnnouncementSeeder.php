<?php

use Illuminate\Database\Seeder;
use App\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $announ1 = Announcement::create([
          'title' => 'Tomorrow is A Day off For All ',
          'discription' => 'The company is marking sunday as a one-time paid holiday for “collective wellbeing” that applies to full-time employees and interns. ',
          'creator' => '1',
          'likes' => 25
      ]);
      $announ2 = Announcement::create([
          'title' => 'Time change',
          'discription' => 'starting from Tomorrow we are changeing the work shifts from 9:00|5:00 to the new shift time 8:00|4:00 we expect every one to follow the new work Time',
          'creator' => '2',
          'likes' => 10
      ]);
      $announ3 = Announcement::create([
          'title' => 'New Team Member Joining Us',
          'discription' => 'I am very pleased to announce that Aya will join the Company as intern. Aya will begin her journey with us on 1/1/2022, please give her a nice welcome.',
          'creator' => '1',
          'likes' => 24
      ]);
    }
}
