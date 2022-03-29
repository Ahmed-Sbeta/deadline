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
          'name' => 'MAWJA',
          'subscription' => '2',
          'Code' => 'mdmoet',
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
          'name' => 'DATA',
          'subscription' => '1',
          'Code' => 'aslfkm',
          'location'=> 'asd',
          'email' => 'DATA@gmail.com'
      ]);
    }
}
