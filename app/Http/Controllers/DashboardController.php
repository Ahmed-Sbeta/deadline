<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Response;
use App\Announcement;
use App\Project;
use App\user_project;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function index(){
      $announcement = Announcement::latest('created_at')->first();
      $project = Project::whereHas('creater', function ($query) {
        return $query->where('company', '=', Auth::user()->company);
      })->latest()->take(5)->get();
      $project_workers = user_project::all();
      $user = User::all();
      return view('en.index',compact('announcement','project','project_workers','user'));
    }

    public function download($filename){
      // Check if file exists in app/storage/file folder
    $file_path = storage_path() .'/app/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
}


//ar

public function Arindex(){
  $announcement = Announcement::latest('created_at')->first();
  $project = Project::whereHas('creater', function ($query) {
    return $query->where('company', '=', Auth::user()->company);
  })->latest()->take(5)->get();
  $project_workers = user_project::all();
  $user = User::all();
  return view('ar.index',compact('announcement','project','project_workers','user'));
}
}
