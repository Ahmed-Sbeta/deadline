<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class mainController extends Controller
{
    public function index(){
      return view('main.index-corporate');
    }

    public function login(){
      return view('main.Login');
    }

    public function admin(){
      return view('main.Admin');
    }

    public function adminLogin(){
      $email = request('name');
      $password = request('password');
      // dd($email);
      $user = User::where('role','=','admin')->first();
      if($email == $user->email & Hash::check($password, $user->password)){
        // dd('sadasd');
        return redirect('/admin/dashboard');
      }else{
        // dd('sssssss');

        return redirect('/admin/login');
      }
    }

    public function lostPassword(){
      return view('main.LostPassword');
    }

    public function signup(){
      return view('main.Signup');
    }

    public function subscribe(){
      return view('main.Subscribe');
    }
}
