<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersSeeder::class);
      $this->call(CompanySeeder::class);
      $this->call(AnnouncementSeeder::class);
      $this->call(ProjectSeeder::class);
      // $this->call(Tasksseeder::class);
      $this->call(ReportsSeeder::class);
      $this->call(SubscriptionSeeder::class);
      $this->call(eventsSeeder::class);
    }
}
