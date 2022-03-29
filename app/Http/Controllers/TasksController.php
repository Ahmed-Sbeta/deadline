<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TaskNotification;
use App\Tasks;
use App\Project;
use Auth;
use App\User;
use App\comments;
use App\email;
use App\user_email;



class TasksController extends Controller
{
    public function board(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $users = User::all()->where('company','=',Auth::user()->company)->where('is_activated','=', true);
      $projects = Project::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->get();
      $tasks = Tasks::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(12);
      return view('en.tasks-board' , compact('tasks','projects','users','user','receved','email'));
    }

    public function list(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $opened = Tasks::with('projects')->where("assignedTo" , "=" , Auth::id())->where("status","=","open")->latest()->paginate(4);
        // dd($opened);
      $inProgress = Tasks::where("assignedTo" , "=" , Auth::id())->where("status","=","inProgress")->latest()->paginate(4);
      $closed = Tasks::where("assignedTo" , "=" , Auth::id())->where("status","=","closed")->latest()->paginate(4);
      $i=1; $j=1; $k=1;
      return view('en.tasks-list',compact('opened','inProgress','closed','i','k','j','user','receved','email'));
    }

    public function addComment($id,Request $request){
      $request->validate([
          'comment' => ['required'],
      ]);
      $comment = new comments;
      $comment->creator = Auth::id();
      $comment->comment = request('comment');
      $comment->file = request('file');
      $comment->task_id = $id;
      $comment->save();
      return redirect()->back()->with('success','Comment added successfuly');
    }

    public function addTask(Request $request){
      $this->validate($request,[
         'title'=>'required',
         'discription'=>'required',
         'projects'=>'required',
         'dueOn'=>'required',
         'file'=>'required',
         'worker'=>'required'
      ]);
      $task = new Tasks;
      $task->title = request('title');
      $task->discription = request('discription');
      $task->creator = Auth::id();
      $task->project = request('projects');
      $task->dueOn =  request('dueOn');;

      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $task->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;

      $task->assignedTo = request('worker');
      $task->status = "open";
      $task->save();
      $users = User::find($request->worker);
      Notification::send($users,new TaskNotification($request->title));
      return redirect('/tasks-board')->with('success','Task added successfuly');
    }

    public function updateTask(Request $request,$id){
      $this->validate($request,[
         'title'=>'required',
         'discription'=>'required',
         'projects'=>'required',
         'dueOn'=>'required',
         'file'=>'required',
         'worker'=>'required'
      ]);
      $task = Tasks::find($id);
      $task->title = request('title');
      $task->discription = request('discription');
      $task->creator = Auth::id();
      $task->project = request('projects');
      $task->dueOn =  request('dueOn');;

      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $task->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;

      $task->assignedTo = request('worker');
      $task->status = "open";
      $task->save();
      return redirect()->back()->with('success','Task updated successfuly');
    }

    public function deleteTask($id){
      $task = Tasks::find($id);
      $task->delete();
      return redirect()->back()->with('success','Task deleted successfuly');
    }

    public function editTask($id){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $users = User::all()->where('company','=',Auth::user()->company);
      $projects = Project::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->get();
      $task = Tasks::find($id);
      return view('en.taskEdit',Compact('task','projects','users','user','receved','email'));
    }

    public function view($id){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $comments = comments::with('creater')->where('task_id','=',$id)->latest()->get();
      $task = Tasks::find($id);
      return view('en.tasks-details',compact('task','comments','user','receved','email'));
    }

    public function openedCheckedTasks(Request $request){
        $cheks = $request->input('doneCheck');
        foreach($cheks as $check => $value){
          $task = Tasks::find($value);
          $task->status = "inProgress";
          $task->save();
        }
        return redirect('/tasks-list');

    }
    public function inProgressCheckedTasks(Request $request){
        $cheks = $request->input('doneCheck');
        foreach($cheks as $check => $value){
          $task = Tasks::find($value);
          $task->status = "closed";
          $task->save();
        }
        return redirect('/tasks-list');

    }
    public function closedCheckedTasks(Request $request){
        $cheks = $request->input('doneCheck');
    }

    public function addreminder($id){
      $task = Tasks::find($id);
      $task->reminder = True;
      // dd($task->reminder);
      $task->save();
      return redirect()->back()->with('success','Reminder added successfuly');
    }

    public function reminders(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $reminders = Tasks::where('reminder','=',True)->where('assignedTo','=',Auth::id())->latest()->paginate(4);
      return view('en.reminders',compact('reminders','user','receved','email'));
    }

    //ar
    public function Arboard(){
      $users = User::all()->where('company','=',Auth::user()->company)->except(Auth::id());
      $projects = Project::get();
      $tasks = Tasks::whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(12);
      return view('ar.tasks-board' , compact('tasks','projects','users'));
    }

    public function Arlist(){
      $opened = Tasks::where("assignedTo" , "=" , Auth::id())->where("status","=","open")->latest()->paginate(4);
      $inProgress = Tasks::where("assignedTo" , "=" , Auth::id())->where("status","=","inProgress")->latest()->paginate(4);
      $closed = Tasks::where("assignedTo" , "=" , Auth::id())->where("status","=","closed")->latest()->paginate(4);
      $i=1; $j=1; $k=1;
      return view('ar.tasks-list',compact('opened','inProgress','closed','i','k','j'));
    }

    public function Arview($id){
      $task = Tasks::find($id);
      return view('ar.tasks-details',compact('task'));
    }
}
