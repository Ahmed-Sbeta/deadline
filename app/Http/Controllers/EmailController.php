<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\email;
use App\user_email;

class EmailController extends Controller
{
    public function index(){
      $email = email::where("creator","=",Auth::id())->get();
      $receved = user_email::where("user_id","=",Auth::id())->get();
      $user = User::all();
      // dd($receved);
      return view('email-empty',compact('email','receved','user'));
    }

    public function emailView($id){
      $selected_mail = email::find($id);
      $email = email::where("creator","=",Auth::id())->get();
      $receved = user_email::where("user_id","=",Auth::id())->get();
      $user = User::all();
      return view('email');
    }

    public function compose(){
      $users = User::all();
      return view('email-compose',compact('users'));
    }
    public function sendEmail(Request $request){
      $email = new email;
      $email->creator = Auth::id();
      $email->subject = request("subject");
      $email->message = request("message");
      //file
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $email->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      //endfile
      $email->save();
      email::find($email->id)->resevers()->attach($request->contributors);
      return redirect('/email');
    }
}
