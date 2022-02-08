<?php

use Illuminate\Database\Seeder;
use App\reports;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report1 = reports::create([
            'title' => 'weekly Report',
            'file' => 'asd/asdasaa/aaa',
            'creator' => '1'
          ]);
        $report1 = reports::create([
            'title' => 'project report',
            'file' => 'askldj/asd/asd',
            'creator' => '2'
          ]);
        $report1 = reports::create([
            'title' => 'something idk really',
            'file' => 'dsd/asdsada/aaa',
            'creator' => '2'
          ]);
        $report1 = reports::create([
            'title' => 'end of project report',
            'file' => 'ddd/dssss/ssss',
            'creator' => '1'
          ]);
    }
}
