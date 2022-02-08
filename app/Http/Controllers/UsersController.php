<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
      return view('edit-account');
    }
    public function employees(){
      $users = User::get();
      return view('employees',compact('users'));
    }
    public function profile(){
      $user = Auth::user();
      return view('edit-account-profile',compact('user'));
    }
    public function notifications(){
      return view('edit-account-notifications');
    }
    public function changepassword(){
      return view('edit-account-password');
    }

    //firstName,lastName and email save changes button.
    public function changeUserInfo(){
      $user = Auth::user();
      $user->firstName = Request('firstName');
      $user->lastName = Request('lastName');
      $user->email = Request('email');
      $user->save();
      return redirect('/edit-account');
    }

    public function changeUserImage(){
      $user=Auth::user();
      $user->image = request()->file('image') ? request()->file('image')->store('public') : Auth::user()->image;
      $user->name = request('profileName');
      $user->about = request('about');
      $user->save();
      return redirect('/edit-account/profile');
    }

}
