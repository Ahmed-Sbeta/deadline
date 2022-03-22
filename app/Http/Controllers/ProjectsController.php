<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use Auth;
use App\User;

class ProjectsController extends Controller
{
    public function index(){
      $projects = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      $archive = Project::where('active','=', false)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      // dd($projects);
      $closest = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->first();
        // dd($closest);
      $closest2 = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->take(2)->get();

      $users = User::all()->Where('company','=',Auth::user()->company);
      $supervisers = User::Where('role','=','suproviser')->Where('company','=',Auth::user()->company)->get();
      $j=1;
      // dd($closest2);
      return view('en.projects',compact('users','closest','closest2','projects','supervisers','j','archive'));
    }
    public function addProject(Request $request){
      $this->validate($request,[
         'title'=>'required',
         'discription'=>'required',
         'budget'=>'required',
         'dueOn'=>'required',
         'file'=>'required',
         'contributors'=>'required'
      ]);
      $project = new Project;
      $project->creator = Auth::id();
      $project->title = request('title');
      $project->discription = request('discription');
      $project->budget = request('budget');
      $project->dueOn = request('dueOn');
      $project->active = True;
      //file
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $project->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      //endfile
      $project->save();
      Project::find($project->id)->workers()->attach($request->contributors);
      return redirect()->back()->with('success','Project added successfuly');
    }

    public function activeCheckedprojects(Request $request){
        $cheks = $request->input('doneCheck');
        foreach($cheks as $check => $value){
          $task = Project::find($value);
          $task->active = false;
          $task->save();
        }
        return redirect('/projects');

    }

    public function searchActive(Request $request){
      $search = $request->input('search');
      $projects = Project::query()
      ->where('title', 'LIKE', "%{$search}%")
      ->where('active','=', true)
      ->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })
        ->latest()
        ->paginate(5);
      $archive = Project::where('active','=', false)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      // dd($projects);
      $closest = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->first();
        // dd($closest);
      $closest2 = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->take(2)->get();

      $users = User::all()->Where('company','=',Auth::user()->company)->except(Auth::id());
      $supervisers = User::Where('role','=','suproviser')->Where('company','=',Auth::user()->company)->get();
      $j=1;
      // dd($closest2);
      return view('en.projects',compact('users','closest','closest2','projects','supervisers','j','archive'));
    }


    public function searchArchive(Request $request){
      $search = $request->input('search');

      $projects = Project::where('active','=', true)
      ->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })
        ->latest()
        ->paginate(5);
      $archive = Project::query()
      ->where('title', 'LIKE', "%{$search}%")->where('active','=', false)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      // dd($projects);
      $closest = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->first();
        // dd($closest);
      $closest2 = Project::where('active','=', true)->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->take(2)->get();

      $users = User::all()->Where('company','=',Auth::user()->company)->except(Auth::id());
      $supervisers = User::Where('role','=','suproviser')->Where('company','=',Auth::user()->company)->get();
      $j=1;
      // dd($closest2);
      return view('en.projects',compact('users','closest','closest2','projects','supervisers','j','archive'));
    }


    //ar

    public function Arindex(){
      $projects = Project::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->get();
      // dd($projects);
      $closest = Project::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->orderBy('dueOn', 'ASC')->first();

      $users = User::all()->Where('company','=',Auth::user()->company)->except(Auth::id());
      $supervisers = User::Where('role','=','suproviser')->Where('company','=',Auth::user()->company)->get();
      return view('ar.projects',compact('users','closest','projects','supervisers'));
    }
}
