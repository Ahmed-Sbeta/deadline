<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Company;

class mainController extends Controller
{
    public function index(){
      return view('main.index-corporate');
    }

    public function login(){
      return view('main.Login');
    }

    public function admin(){
      $companies = Company::with('suscription')->get();
      $users = User::all();
      // dd($companies);
      return view('main.Admin',compact('companies','users'));
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

    //ar

    public function Arindex(){
      return view('mainAR.index-corporate');
    }

    public function Arlogin(){
      return view('mainAR.Login');
    }

    public function Aradmin(){
      $companies = Company::with('suscription')->get();
      $users = User::all();
      // dd($companies);
      return view('mainAR.Admin',compact('companies','users'));
    }
    public function ArlostPassword(){
      return view('mainAR.LostPassword');
    }

    public function Arsignup(){
      return view('mainAR.Signup');
    }

    public function Arsubscribe(){
      return view('mainAR.Subscribe');
    }
}
