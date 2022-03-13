<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reports;
use App\User;
use Auth;

class ReportsController extends Controller
{
    public function index(){
      $creator = User::all()->where('company','=',Auth::user()->company);
      $reports = reports::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(4);
      // dd($reports);
      return view('en.reports',compact('reports','creator'));
    }
    public function addReport(){
      $report = new reports;
      $report->title = request('title');
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $report->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      $report->creator = 1;
      $report->save();
      return redirect('/reports');
    }

    //ar

    public function Arindex(){
      $creator = User::all()->where('company','=',Auth::user()->company);
      $reports = reports::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(4);
      // dd($reports);
      return view('ar.reports',compact('reports','creator'));
    }
}
