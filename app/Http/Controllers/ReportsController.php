<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reports;
use App\User;

class ReportsController extends Controller
{
    public function index(){
      $creator = User::all();
      $reports = reports::with('creater')->latest()->paginate(4);
      // dd($reports);
      return view('reports',compact('reports','creator'));
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
}
