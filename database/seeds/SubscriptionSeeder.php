<?php

use Illuminate\Database\Seeder;
use App\Subscription;
class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sub1 = Subscription::create([
          'name' => 'standard',
          'price' => '19.99'
      ]);
      $sub1 = Subscription::create([
          'name' => 'expert',
          'price' => '19.99'
      ]);
    }
}
