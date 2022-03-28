<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Auth;
use App\User;
use App\email;
use App\user_email;
use App\comments;

class AnnouncementController extends Controller
{
    public function index(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $announcements = Announcement::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      return view('en.Announcements',compact('announcements','users','receved','email'));
    }

    public function Announcement_details($id){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $comments = comments::with('creater')->where('announcment_id','=',$id)->latest()->get();
      // dd($comments);
      $announcement = Announcement::find($id);
      return view('en.announcement-details',compact('announcement','comments','users','receved','email'));
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
    public function updateAnnouncement(Request $request,$id){
      $request->validate([
          'title' => ['required'],
          'discription' => ['required'],
          'file' => ['required'],
      ]);
      $announcement= Announcement::find($id);
      $announcement->creator = Auth::id();
      $announcement->title = request('title');
      $announcement->discription = request('discription');
      $announcement->likes = 45;
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $name = str_replace(' ', '', $name);
      $announcement->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
      $announcement->save();
      return redirect()->back()->with('success','Announcement updated successfuly');;
    }

    public function deleteAnnouncement($id){
      $ann = Announcement::find($id);
      $ann->delete();
      return redirect()->back()->with('success','Announcement deleted successfuly');;
    }

    public function EditAnnouncement($id){
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $announcements = Announcement::with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
        $ann = Announcement::find($id);
      return view('en.EditAnnouncements',compact('announcements','ann','receved','email'));


    }
    public function searchAnn(Request $request){
      $search = $request->input('search');
      $users = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();

      $announcements = Announcement::query()
      ->where('title', 'LIKE', "%{$search}%")->with('creater')->whereHas('creater', function ($query) {
          return $query->where('company', '=', Auth::user()->company);
        })->latest()->paginate(5);
      return view('en.Announcements',compact('announcements','user','receved','email'));
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
