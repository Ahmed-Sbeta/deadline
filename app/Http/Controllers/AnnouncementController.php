<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Auth;
use App\comments;

class AnnouncementController extends Controller
{
    public function index(){
      $announcements = Announcement::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      return view('en.Announcements',compact('announcements'));
    }

    public function Announcement_details($id){
      $comments = comments::with('creater')->where('announcment_id','=',$id)->latest()->get();
      // dd($comments);
      $announcement = Announcement::find($id);
      return view('en.announcement-details',compact('announcement','comments'));
    }

    public function addComment($id,Request $request){
      $request->validate([
          'comment' => ['required'],
      ]);
      $comment = new comments;
      $comment->creator = Auth::id();
      $comment->comment = request('comment');
      $comment->file = request('file');
      $comment->announcment_id = $id;
      $comment->save();
      return redirect()->back()->with('success','Comment added successfuly');
    }

    public function addAnnouncement(Request $request){
      $request->validate([
          'title' => ['required'],
          'discription' => ['required'],
          'file' => ['required'],
      ]);
      $announcement= new Announcement;
      $announcement->creator = Auth::id();
      $announcement->title = request('title');
      $announcement->discription = request('discription');
      $announcement->likes = 45;
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $announcement->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      $announcement->save();
      return redirect('/announcments')->with('success','Announcement added successfuly');;
    }

    public function searchAnn(Request $request){
      $search = $request->input('search');

      $announcements = Announcement::query()
      ->where('title', 'LIKE', "%{$search}%")->with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      return view('en.Announcements',compact('announcements'));
    }

    //ar
    public function Arindex(){
      $announcements = Announcement::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      return view('en.Announcements',compact('announcements'));
    }

    public function ArAnnouncement_details($id){
      $announcement = Announcement::find($id);
      return view('en.announcement-details',compact('announcement'));
    }
}
