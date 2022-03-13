<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
      return view('en.subscription');
    }
    public function billingUpGrade(){
      return view('en.billing-upgrade');
    }
    public function billingInvoice(){
      return view('en.billing-invoice');
    }
    public function billingHistory(){
      return view('en.billing-history');
    }
    public function billingPayment(){
      return view('en.billing-payment');
    }

    //ar
    public function index(){
      return view('ar.subscription');
    }
    public function billingUpGrade(){
      return view('ar.billing-upgrade');
    }
    public function billingInvoice(){
      return view('ar.billing-invoice');
    }
    public function billingHistory(){
      return view('ar.billing-history');
    }
    public function billingPayment(){
      return view('ar.billing-payment');
    }
}
