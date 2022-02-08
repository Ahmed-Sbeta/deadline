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
          'title' => 'new update',
          'discription' => 'asjdhksajhdksjahdksa dsakjdhsajd skajdhsnak kasjdnsa ksajdnsa dksajd kjf kjdsf ewkjfds fkjnk',
          'creator' => '2',
          'likes' => 25
      ]);
      $announ2 = Announcement::create([
          'title' => 'secound update',
          'discription' => 'asjdhksajhdksjahdksa dsakjdhsajd skajdhsnak kasjdnsa ksajdnsa dksajd kjf kjdsf ewkjfds fkjnk',
          'creator' => '1',
          'likes' => 10
      ]);
      $announ3 = Announcement::create([
          'title' => 'thered update',
          'discription' => 'asjdhksajhdksjahdksa dsakjdhsajd skajdhsnak kasjdnsa ksajdnsa dksajd kjf kjdsf ewkjfds fkjnk',
          'creator' => '2',
          'likes' => 24
      ]);
    }
}
