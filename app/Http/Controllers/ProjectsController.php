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
      $projects = Project::all();
      $closest = Project::orderBy('dueOn', 'ASC')->first();
      $users = User::all()->except(Auth::id());
      $supervisers = User::Where('role','=','suproviser')->get();
      return view('projects',compact('users','closest','projects','supervisers'));
    }
    public function addProject(Request $request){
      $project = new Project;
      $project->creator = Auth::id();
      $project->title = request('title');
      $project->discription = request('discription');
      $project->budget = request('budget');
      $project->dueOn = request('dueOn');
      //file
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $project->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      //endfile
      $project->save();
      Project::find($project->id)->workers()->attach($request->contributors);
      return redirect('/projects');
    }
}
