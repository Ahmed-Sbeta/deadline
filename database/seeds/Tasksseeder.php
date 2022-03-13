<?php

use Illuminate\Database\Seeder;
use App\Tasks;

class Tasksseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $task1 = Tasks::create([
          'title' => 'mawja1',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 2,
          'project' => 2,
          'creator' => 4,
          'dueOn' => '2022-03-15',
          'status' => "open"
      ]);
      $task2 = Tasks::create([
          'title' => 'mawja2',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "open"
      ]);
      $task3 = Tasks::create([
          'title' => 'mawja3',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'dueOn' => '2022-03-15',
          'creator' => 1,
          'status' => "open"
      ]);
      $task4 = Tasks::create([
          'title' => 'mawja4',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "open"
      ]);
      $task5 = Tasks::create([
          'title' => 'mawja5',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 2,
          'dueOn' => '2022-03-15',
          'status' => "closed"
      ]);
      $task6 = Tasks::create([
          'title' => 'mawja6',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "closed"
      ]);
      $task7 = Tasks::create([
          'title' => 'mawja7',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "inProgress"
      ]);
      $task8 = Tasks::create([
          'title' => 'mawja8',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "inProgress"
      ]);
      $task9 = Tasks::create([
          'title' => 'mawja9',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "inProgress"
      ]);
      $task10 = Tasks::create([
          'title' => 'mawja10',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "inProgress"
      ]);
      $task11 = Tasks::create([
          'title' => 'mawja11',
          'discription' => 'aslkdjskaljfldskfjsdlkjdlskjflsdkjfldskjfdlskfjlksdm',
          'assignedTo' => 1,
          'project' => 2,
          'creator' => 1,
          'dueOn' => '2022-03-15',
          'status' => "closed"
      ]);
    }
}
