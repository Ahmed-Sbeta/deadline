<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Company;
use App\User;

class CompanyController extends Controller
{
    public function addcompany(){
      $company = new Company;
      $user = new User;

      $company->name = request('name');
      $company->location = request('location');
      $company->subscription = request('subscription');
      $company->Code = Str::random(6);
      $company->email= request('email');
      $company->save();
      // dd($company);
      $user->firstName = request('firstName');
      $user->lastName = request('lastName');
      $user->name = request('firstName').request('lastName');
      $user->dob = request('dob');
      $user->email = request('email');
      $user->job = "Manager";
      $user->role = "administrator";
      $user->company = $company->id;
      $user->phoneNumber = request('phoneNumber');
      $password = request('password');
      $passwordConfirmation = request('confirmPassword');
      if($password == $passwordConfirmation){
        $user->password =  Hash::make($password);
        $user->save();
      }else{
        //error
        return redirect('/subscribe');
      }
      return redirect('/subscribe');

    }
}
