<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\email;
use App\user_email;

class SubscriptionController extends Controller
{
    public function index(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.subscription',compact('user','receved','email'));
    }
    public function billingUpGrade(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.billing-upgrade',compact('user','receved','email'));
    }
    public function billingInvoice(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.billing-invoice',compact('user','receved','email'));
    }
    public function billingHistory(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.billing-history',compact('user','receved','email'));
    }
    public function billingPayment(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.billing-payment',compact('user','receved','email'));
    }

    //ar
    public function Arindex(){
      return view('ar.subscription');
    }
    public function ArbillingUpGrade(){
      return view('ar.billing-upgrade');
    }
    public function ArbillingInvoice(){
      return view('ar.billing-invoice');
    }
    public function ArbillingHistory(){
      return view('ar.billing-history');
    }
    public function ArbillingPayment(){
      return view('ar.billing-payment');
    }
}
