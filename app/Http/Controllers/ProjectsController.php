<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ProjectNotification;
use App\Project;
use Auth;
use App\User;
use App\Tasks;
use App\comments;
use App\user_project;
use App\email;
use App\user_email;

class ProjectsController extends Controller
{
    public function index(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
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

      $users = User::all()->Where('company','=',Auth::user()->company)->where('is_activated','=', true);
      $supervisers = User::Where('role','=','suproviser')->Where('company','=',Auth::user()->company)->where('is_activated','=', true)->get();
      $j=1;
      // dd($closest2);
      return view('en.projects',compact('users','closest','closest2','projects','supervisers','j','archive','receved','email','user'));
    }

    public function addComment($id,Request $request){
      $request->validate([
          'comment' => ['required'],
      ]);
      $comment = new comments;
      $comment->creator = Auth::id();
      $comment->comment = request('comment');
      $comment->file = request('file');
      $comment->project_id = $id;
      $comment->save();
      return redirect()->back()->with('success','Comment added successfuly');
    }

    public function projectDetails($id){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $project= Project::find($id);
      $comments = comments::with('creater')->where('project_id','=',$id)->latest()->get();

      return view('en.projects-details',compact('project','comments','receved','email','user'));
    }

    public function addProject(Request $request){
      $this->validate($request,[
         'title'=>'required',
         'discription'=>'required',
         'budget'=>'required|numeric',
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

      $users = User::find($request->contributors);
      Notification::send($users,new ProjectNotification($request->title));
      return redirect('/projects')->with('success','Project added successfuly');
    }
    public function UpdateProject(Request $request,$id){
      $this->validate($request,[
         'title'=>'required',
         'discription'=>'required',
         'budget'=>'required',
         'dueOn'=>'required',
         'file'=>'required',
         'contributors'=>'required'
      ]);
      $project =Project::find($id);
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

      $users = User::find($request->contributors);
      Notification::send($users,new ProjectNotification($request->title));
      return redirect()->back()->with('success','Project updated successfuly');
    }

    public function delete($id){
      $proj = Project::find($id);
      $user_project = user_project::where('project_id','=',$id);
      $tasks = Tasks::where('project','=',$id);
      $tasks->delete();
      $proj->delete();
      $user_project->delete();
      return redirect()->back()->with('success','Project deleted successfuly');
    }

    public function edit($id){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $users = User::all()->Where('company','=',Auth::user()->company);
      $users_proj = user_project::Where('project_id','=',$id)->get();
      $proj = Project::find($id);
      return view('en.projectsEdit',compact('proj','users','users_proj','receved','email','user'));
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
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
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
      return view('en.projects',compact('users','closest','closest2','projects','supervisers','j','archive','receved','email','user'));
    }


    public function searchArchive(Request $request){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
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
      return view('en.projects',compact('users','closest','closest2','projects','supervisers','j','archive','receved','email','user'));
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
