<?php

use Illuminate\Database\Seeder;
use App\User;
use App\roles;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = User::create([
          'name' => 'ahmed sbeita',
          'firstName' => 'ahmed',
          'lastName' => 'sbeita',
          'phoneNumber' => '0917777777',
          'type' => 'contract',
          'department' => 'Design',
          'job' => 'Project manager',
          'about' => 'idk',
          'image' => 'public/avjdoquDeTDUi2WEBd78DKY6VHWEF0L4ZPy40Es6.jpg',
          'email' => 'admin@gmail.com',
          'role' => 'administrator',
          'password' => Hash::make('12345678')
      ]);
      $suproviser = User::create([
          'name' => 'someone',
          'firstName' => 'ali',
          'lastName' => 'alaaa',
          'phoneNumber' => '0910000000',
          'type' => 'part time',
          'department' => 'Design',
          'job' => 'Designer',
          'about' => 'idc',
          'image' => 'public/256_rsz_1andy-lee-642320-unsplash.jpg',
          'email' => 'suproviser@gmail.com',
          'role' => 'suproviser',
          'password' => Hash::make('12345678')
      ]);
      $suproviser1 = User::create([
          'name' => 'someone2',
          'firstName' => 'ali',
          'lastName' => 'alaaa',
          'phoneNumber' => '0910000000',
          'type' => 'part time',
          'department' => 'Design',
          'job' => 'Designer',
          'about' => 'idc',
          'image' => 'public/256_rsz_1andy-lee-642320-unsplash.jpg',
          'email' => 'suproviser1@gmail.com',
          'role' => 'suproviser',
          'password' => Hash::make('12345678')
      ]);
      $suproviser2 = User::create([
          'name' => 'someone3',
          'firstName' => 'ali',
          'lastName' => 'alaaa',
          'phoneNumber' => '0910000000',
          'type' => 'part time',
          'department' => 'Design',
          'job' => 'Designer',
          'about' => 'idc',
          'image' => 'public/256_rsz_1andy-lee-642320-unsplash.jpg',
          'email' => 'suproviser2@gmail.com',
          'role' => 'suproviser',
          'password' => Hash::make('12345678')
      ]);
      $employee = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
      $employee1 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee1@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
      $employee2 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee2@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
      $employee3 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee3@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
      $employee4 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee4@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
      $employee5 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee5@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
      $employee6 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'type' => 'contract',
          'department' => 'web development',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee6@gmail.com',
          'role' => 'employee',
          'password' => Hash::make('12345678')
      ]);
    }
}
