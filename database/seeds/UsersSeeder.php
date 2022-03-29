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
          'job' => 'Project manager',
          'company' => '1',
          'about' => 'idk',
          'image' => 'public/download.png',
          'email' => 'admin@gmail.com',
          'role' => 'administrator',
          'is_activated' => True,
          'password' => Hash::make('12345678')
      ]);
      $suproviser = User::create([
          'name' => 'someone',
          'firstName' => 'ali',
          'lastName' => 'alaaa',
          'phoneNumber' => '0910000000',
          'job' => 'Designer',
          'company' => '1',
          'about' => 'idc',
          'image' => 'public/download.png',
          'email' => 'suproviser@gmail.com',
          'role' => 'suproviser',
          'password' => Hash::make('12345678')
      ]);
      $suproviser1 = User::create([
          'name' => 'someone2',
          'firstName' => 'ali',
          'lastName' => 'alaaa',
          'phoneNumber' => '0910000000',
          'company' => '1',
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
          'job' => 'Designer',
          'about' => 'idc',
          'image' => 'public/256_rsz_1andy-lee-642320-unsplash.jpg',
          'email' => 'suproviser2@gmail.com',
          'role' => 'suproviser',
          'company' => '2',
          'password' => Hash::make('12345678')
      ]);
      $employee = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee@gmail.com',
          'role' => 'employee',
          'company' => '1',
          'password' => Hash::make('12345678')
      ]);
      $employee1 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee1@gmail.com',
          'role' => 'employee',
          'company' => '1',
          'password' => Hash::make('12345678')
      ]);
      $employee2 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee2@gmail.com',
          'role' => 'employee',
          'company' => '1',
          'password' => Hash::make('12345678')
      ]);
      $employee3 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee3@gmail.com',
          'role' => 'employee',
          'company' => '1',
          'password' => Hash::make('12345678')
      ]);
      $employee4 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee4@gmail.com',
          'role' => 'employee',
          'company' => '1',
          'password' => Hash::make('12345678')
      ]);
      $employee5 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee5@gmail.com',
          'role' => 'employee',
          'company' => '2',
          'password' => Hash::make('12345678')
      ]);
      $employee6 = User::create([
          'name' => 'somebody',
          'firstName' => 'khalid',
          'lastName' => 'kohli',
          'phoneNumber' => '0919999999',
          'job' => 'Front-end developer',
          'about' => 'idga',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'employee6@gmail.com',
          'role' => 'employee',
          'company' => '2',
          'password' => Hash::make('12345678')
      ]);
      $admin = User::create([
          'name' => 'adminADMIN',
          'firstName' => 'admin',
          'lastName' => 'ADMIN',
          'phoneNumber' => '0919999999',
          'job' => 'Manager',
          'about' => 'idk',
          'image' => 'public/2s7xaahqoZ9HZH2QWXvGJBkfkSkFCMdIK3sAqSou.jpg',
          'email' => 'admin@admin.admin',
          'role' => 'admin',
          'company' => NULL,
          'password' => Hash::make('12345678')
      ]);
    }
}
