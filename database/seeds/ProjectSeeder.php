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

        $proj1 = Project::create([
            'title' => 'mawja',
            'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
            'dueOn' => '2022-03-15',
            'budget' => '5012',
            'file' => '/asdasd/sadsa/dsa',
            'creator' => '1'
        ]);
        $proj2 = Project::create([
          'title' => 'mawja2',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'dueOn' => '2022-02-17',
          'budget' => '5012',
          'file' => '/asdasd/sadsa/dsa',
          'creator' => '1'
        ]);
        $proj3 = Project::create([
          'title' => 'mawja3',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'dueOn' => '2022-02-19',
          'budget' => '5012',
          'file' => '/asdasd/sadsa/dsa',
          'creator' => '1'
        ]);

    }
}
