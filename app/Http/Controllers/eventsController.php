<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EventNotification;
use App\events;
use carbon\carbon;
use Auth;
use App\User;
use App\email;
use App\user_email;

class eventsController extends Controller
{
    public function index(){
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $today = events::where('date','=',Carbon::now()->format('Y-m-d'))->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->get();
      // dd($today);
      $upcoming = events::where('date','>',Carbon::now()->format('Y-m-d'))->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('date', 'ASC')->latest()->take(2)->get();
      // dd($upcoming);
      $events = events::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->get();

      $dob = User::Where('company','=',Auth::user()->company)->where('dob','=',Carbon::now()->format('Y-m-d'))->first();
      // dd($dob);

      return view('en.events',compact('today','upcoming','events','dob','receved','email'));
    }

    public function addEvent(Request $request){
      $request->validate([
          'title' => ['required'],
          'date' => ['required'],
          'from' => ['required'],
          'to' => ['required'],
      ]);
      $event = new events;
      $event->title = request('title');
      $event->date = request('date');
      $event->from = request('from');
      $event->to = request('to');
      $event->creator = Auth::id();
      $event->save();
      $users = User::all();
      Notification::send($users,new EventNotification($request->title));
      return redirect()->back()->with('success','Event added successfuly');
    }
}
