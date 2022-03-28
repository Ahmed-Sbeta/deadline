<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reports;
use App\User;
use Auth;
use App\email;
use App\user_email;

class ReportsController extends Controller
{
    public function index(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $creator = User::all()->where('company','=',Auth::user()->company);
      $reports = reports::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(4);
      // dd($reports);
      return view('en.reports',compact('reports','creator','user','receved','email'));
    }
    public function addReport(Request $request){
      $this->validate($request,[
         'title'=>'required',
         'file'=>'required'
      ]);
      $report = new reports;
      $report->title = request('title');
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $report->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      $report->creator = Auth::id();
      $report->save();
      return redirect('/reports')->with('success','Report uploaded successfuly');
    }

    public function deleteReport($id){
      $report = reports::find($id);
      $report->delete();
      return redirect()->back()->with('success','Report deleted successfuly');
    }
    public function EditReport($id){
      $creator = User::all()->where('company','=',Auth::user()->company);
      $report = reports::find($id);
      // dd($reports);
      return view('en.Editreports',compact('report','creator'));

    }
    public function updateReport(Request $request,$id){
      $this->validate($request,[
         'title'=>'required',
         'file'=>'required'
      ]);
      $report = reports::find($id);
      $report->title = request('title');
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $report->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      $report->creator = Auth::id();
      $report->save();
      return redirect()->back()->with('success','Report updated successfuly');
    }


    public function searchReport(Request $request){
      $users = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $search = $request->input('search');

      $creator = User::all()->where('company','=',Auth::user()->company);
      $reports = reports::query()
      ->where('title', 'LIKE', "%{$search}%")->with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(4);
      // dd($reports);
      return view('en.reports',compact('reports','creator','user','receved','email'));
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
