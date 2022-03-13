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
          'name' => 'Basic',
          'price' => '300'
      ]);
      $sub1 = Subscription::create([
          'name' => 'standard',
          'price' => '550'
      ]);
      $sub2 = Subscription::create([
          'name' => 'Premium',
          'price' => '850'
      ]);
    }
}
