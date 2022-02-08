<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
      return view('subscription');
    }
    public function billingUpGrade(){
      return view('billing-upgrade');
    }
    public function billingInvoice(){
      return view('billing-invoice');
    }
    public function billingHistory(){
      return view('billing-history');
    }
    public function billingPayment(){
      return view('billing-payment');
    }
}
