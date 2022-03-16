<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use App\Company;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
      return view('en.edit-account');
    }
    public function employees(){
      $users = User::Where('company','=',Auth::user()->company)->get();
      $EOM = User::Where('company','=',Auth::user()->company)->Where('EOM','=',true)->first();
      $last = User::Where('company','=',Auth::user()->company)->latest()->first();
      return view('en.employees',compact('users','EOM','last'));
    }
    public function eOfMonth(){
      $EOM = request('EOM');
      User::where('company', '=', Auth::user()->company)->update(['EOM' => false]);
      $user = User::find($EOM);
      $user->EOM = true;
      $user->save();
      return redirect()->back();
    }
    public function profile(){
      $user = Auth::user();
      return view('en.edit-account-profile',compact('user'));
    }
    public function notifications(){
      return view('en.edit-account-notifications');
    }
    public function changepassword(){
      return view('en.edit-account-password');
    }

    //firstName,lastName and email save changes button.
    public function changeUserInfo(){
      $user = Auth::user();
      $user->firstName = Request('firstName');
      $user->lastName = Request('lastName');
      $user->name = Request('firstName')." ".Request('lastName');
      $user->email = Request('email');
      $user->save();
      return redirect('/edit-account');
    }

    public function changeUserImage(){
      $user=Auth::user();
      $user->image = request()->file('image') ? request()->file('image')->store('public') : Auth::user()->image;
      // $user->name = request('profileName');
      $user->about = request('about');
      $user->save();
      return redirect('/edit-account/profile');
    }

    public function addEmployee(){
      $companyes = Company::all();
      $user= new User;
      $Companycode = request('Code');
      // dd($Companycode);
      foreach($companyes as $companies){
        if($companies->Code == $Companycode){
          $user->company = $companies->id;
        }
      }
      if($user->company == null){
        return redirect('/signup');
      }
      $user->firstName = request('firstName');
      $user->lastName = request('lastName');
      $user->name = request('firstName').request('lastName');
      $user->dob = request('dob');
      $user->job = request('job');
      $user->role = "employee";
      $user->email = request('email');
      $password = request('password');
      $passwordConfirmation = request('confirmPassword');
      if($password == $passwordConfirmation){
        $user->password =  Hash::make($password);
        $user->save();
      }else{
        //error
        return redirect('/signup');
      }
      return redirect('/signup');

    }

    //ar
    public function Arindex(){
      return view('ar.edit-account');
    }
    public function Aremployees(){
      $users = User::Where('company','=',Auth::user()->company)->get();
      return view('ar.employees',compact('users'));
    }
    public function Arprofile(){
      $user = Auth::user();
      return view('ar.edit-account-profile',compact('user'));
    }
    public function Arnotifications(){
      return view('ar.edit-account-notifications');
    }
    public function Archangepassword(){
      return view('ar.edit-account-password');
    }

}
