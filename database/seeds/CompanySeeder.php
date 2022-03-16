<?php

use Illuminate\Database\Seeder;
use App\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $comp1 = Company::create([
          'name' => 'mawja',
          'subscription' => '1',
          'Code' => 'abc123',
          'location'=> 'asd',
          'email' => 'mawja@gmail.com'
      ]);
      $comp2 = Company::create([
          'name' => 'lybotics',
          'subscription' => '1',
          'Code' => 'abf15h',
          'location'=> 'asd',
          'email' => 'lybotics@gmail.com'
      ]);
      $comp3 = Company::create([
          'name' => 'flag',
          'subscription' => '1',
          'Code' => 'abc12345',
          'location'=> 'asd',
          'email' => 'flag@gmail.com'
      ]);
    }
}
