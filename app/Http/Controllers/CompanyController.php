<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Company;
use App\User;
use Carbon\Carbon;

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
      $now = Carbon::now()->addDay(31)->toDateString();
      $company->exp_date= $now;
      $company->save();
      // dd($company);
      $user->firstName = request('firstName');
      $user->lastName = request('lastName');
      $user->name = request('firstName').request('lastName');
      $user->dob = request('dob');
      $user->email = request('email');
      $user->job = "Manager";
      $user->is_activated = True;
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
        return redirect('/subscribe')->with('error','somthing went wrong');
      }
      return redirect('/subscribe')->with('success','Company created successfuly , expect an email in the next 24 houres');

    }

    public function editCompany($id){
      $company = Company::find($id);
      $company->subscription = request('subscriptions');
      $company->save();
      return redirect()->back();

    }

    public function deleteCompany($id){
      $company = Company::find($id);
      $users = User::where('company','=',$company->id)->get();
      foreach($users as $user){
        $user->is_activated = null;
        $user->save();
      }
      $company->delete();
      return redirect('/admin/dashboard')->with('error','Company deleted successfuly');

    }
}
