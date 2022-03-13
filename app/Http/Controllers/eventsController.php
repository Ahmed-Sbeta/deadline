<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;
use Auth;
use carbon\carbon;
use App\User;

class eventsController extends Controller
{
    public function index(){
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

      return view('en.events',compact('today','upcoming','events','dob'));
    }

    public function addEvent(){
      $event = new events;
      $event->title = request('title');
      $event->date = request('date');
      $event->from = request('from');
      $event->to = request('to');
      $event->creator = Auth::id();
      $event->save();
      return redirect()->back();
    }
}
