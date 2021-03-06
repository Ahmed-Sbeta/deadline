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
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->latest()->get();
      $receved = user_email::where("user_id","=",Auth::id())->latest()->get();
      $user = User::where('company','=',Auth::user()->company)->get();
      // dd($receved);
      return view('en.email-empty',compact('email','receved','user'));
    }

    public function emailView($id){
      $selected_mail = email::find($id);
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->latest()->get();
      $receved = user_email::where("user_id","=",Auth::id())->latest()->get();
      $user = User::where('company','=',Auth::user()->company)->get();
      return view('en.email',compact('email','receved','user','selected_mail'));
    }

    public function delete($id){
      $email = email::find($id);

      $email->deleted = True;
      $email->save();
      return redirect('/email');
    }

    public function sentMail(){
      $sent = email::where("creator","=",Auth::id())->where('deleted','=',False)->latest()->get();
      $user = User::where('company','=',Auth::user()->company)->get();
      return view('en.email-sent',compact('sent','user'));
    }
    public function trashMail(){
      $trash = email::where('deleted','=',True)->latest()->get();
      $user = User::where('company','=',Auth::user()->company)->get();
      return view('en.email-trash',compact('trash','user'));
    }

    public function compose(){
      $someone = NULL;
      $users = User::where('company','=',Auth::user()->company)->get();
      return view('en.email-compose',compact('users','someone'));
    }

    public function composeTo($id){
      $someone = User::find($id);
      $users = User::where('company','=',Auth::user()->company)->get();
      return view('en.email-compose',compact('users','someone'));
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

    public function forward($id){
      $users = User::where('company','=',Auth::user()->company)->get();
      $email = email::find($id);
      return view('en.forward-compose',compact('email','users'));
    }

    public function sendforward(Request $request){
      $email = new email;
      $email->creator = Auth::id();
      $email->subject = request("subject");
      $email->message = request("message");
      //file
      $email->file = request("file");
      //file
      $email->save();
      email::find($email->id)->resevers()->attach($request->contributors);
      return redirect('/email');
    }

    public function reply($id){
      $email = email::find($id);
      $reply = new email;
      $reply->creator = Auth::id();
      $reply->subject = $email->subject;
      $reply->message = request("reply");
      $reply->file = null;
      $reply->save();
      email::find($reply->id)->resevers()->attach($email->creator);
      return redirect('/email');
    }

    //ar

    public function Arindex(){
      $email = email::where("creator","=",Auth::id())->latest()->get();
      $receved = user_email::where("user_id","=",Auth::id())->latest()->get();
      $user = User::all();
      // dd($receved);
      return view('ar.email-empty',compact('email','receved','user'));
    }

    public function AremailView($id){
      $selected_mail = email::find($id);
      $email = email::where("creator","=",Auth::id())->latest()->get();
      $receved = user_email::where("user_id","=",Auth::id())->latest()->get();
      $user = User::all();
      return view('ar.email',compact('email','receved','user','selected_mail'));
    }
    public function Arforward($id){
      $users = User::all();
      $email = email::find($id);
      return view('ar.forward-compose',compact('email','users'));
    }

    public function Arsendforward(Request $request){
      $email = new email;
      $email->creator = Auth::id();
      $email->subject = request("subject");
      $email->message = request("message");
      //file
      $email->file = request("file");
      //file
      $email->save();
      email::find($email->id)->resevers()->attach($request->contributors);
      return redirect('/ar/email');
    }

    public function Arreply($id){
      $email = email::find($id);
      $reply = new email;
      $reply->creator = Auth::id();
      $reply->subject = $email->subject;
      $reply->message = request("reply");
      $reply->file = null;
      $reply->save();
      email::find($reply->id)->resevers()->attach($email->creator);
      return redirect('/ar/email');
    }
}
