<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $proj = Project::create([
            'title' => 'Libyan Wings : Marketing Campaign ',
            'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
            'dueOn' => '2022-03-15',
            'budget' => '1212',
            'file' => '/asdasd/sadsa/dsa',
            'creator' => '4'
        ]);

        $proj1 = Project::create([
            'title' => 'some projrct',
            'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
            'dueOn' => '2022-03-15',
            'budget' => '5012',
            'file' => '/asdasd/sadsa/dsa',
            'creator' => '1'
        ]);
        $proj2 = Project::create([
          'title' => 'some projrct 1',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'dueOn' => '2022-02-17',
          'budget' => '5012',
          'file' => '/asdasd/sadsa/dsa',
          'creator' => '1'
        ]);
        $proj3 = Project::create([
          'title' => 'some projrct 3',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'dueOn' => '2022-02-19',
          'budget' => '5012',
          'file' => '/asdasd/sadsa/dsa',
          'creator' => '1'
        ]);

    }
}
