<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Auth;
use App\User;
use App\email;
use App\user_email;
use App\Company;


class UsersController extends Controller
{
    public function index(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.edit-account',compact('users','receved','email'));
    }
    public function employees(){
      $users = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $users = User::Where('company','=',Auth::user()->company)->where('is_activated','=',True)->paginate(10);
      $EOM = User::Where('company','=',Auth::user()->company)->Where('EOM','=',true)->first();
      $last = User::Where('company','=',Auth::user()->company)->where('is_activated','=',True)->latest()->first();
      return view('en.employees',compact('users','EOM','last','user','receved','email'));
    }
    public function eOfMonth(){
      $EOM = request('EOM');
      User::where('company', '=', Auth::user()->company)->where('is_activated','=',True)->update(['EOM' => false]);
      $user = User::find($EOM);
      $user->EOM = true;
      $user->save();
      return redirect()->back()->with('success','Employee of the month changed successfuly');
    }
    public function profile(){
      $users = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $user = Auth::user();
      return view('en.edit-account-profile',compact('user','users','receved','email'));
    }
    public function notifications(){
      return view('en.edit-account-notifications');
    }
    public function changepassword(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      return view('en.edit-account-password',compact('user','receved','email'));
    }
    public function changeUserPassword(Request $request){
      $request->validate([
          'current_password' => ['required', new MatchOldPassword],
          'new_password' => ['required'],
          'new_confirm_password' => ['same:new_password'],
      ]);

      User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

      return redirect()->back()->with('Succuss','Password Changed successfuly');
    }

    public function changerole(Request $request){
      $cheks = $request->input('Role');
      // dd($cheks);
      foreach($cheks as $check => $value){
        $myArray = explode(',', $value);
        // dd($myArray);
        $user = User::find($myArray[1]);
        $user->role = $myArray[0];
        $user->save();
      }
      return redirect('/employees')->with('success','Employee Role changed successfuly');;
    }

    public function search(Request $request){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $EOM = User::Where('company','=',Auth::user()->company)->Where('EOM','=',true)->first();
      $last = User::Where('company','=',Auth::user()->company)->where('is_activated','=',True)->latest()->first();
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $users = User::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->where('company','=',Auth::user()->company)
        ->where('is_activated','=',True)
        ->paginate(10);

    // Return the search view with the resluts compacted
    return view('en.employees',compact('users','EOM','last','user','receved','email'));
}

    //firstName,lastName and email save changes button.
    public function changeUserInfo(Request $request){
      $request->validate([
          'firstName' => ['required'],
          'lastName' => ['required'],
          'email' => ['required'],
      ]);
      $user = Auth::user();
      $user->firstName = Request('firstName');
      $user->lastName = Request('lastName');
      $user->name = Request('firstName')." ".Request('lastName');
      $user->email = Request('email');
      $user->save();
      return redirect('/edit-account')->with('success','Information edited successfuly');
    }

    public function changeUserImage(Request $request){
      $request->validate([
        'phoneNumber' => ['required']
      ]);
      $user=Auth::user();
      $user->image = request()->file('image') ? request()->file('image')->store('public') : Auth::user()->image;
      $user->phoneNumber = request('phoneNumber');
      $user->about = request('about');
      $user->save();
      return redirect('/edit-account/profile')->with('success','information Changed successfuly');
    }

    public function addEmployee(){
      $companyes = Company::all();
      $user= new User;
      $Companycode = request('Code');
      // dd($Companycode);
      foreach($companyes as $companies){
        if($companies->Code == $Companycode){
          $user->company = $companies->id;
        }
      }
      if($user->company == null){
        return redirect('/signup');
      }
      $user->firstName = request('firstName');
      $user->lastName = request('lastName');
      $user->name = request('firstName').request('lastName');
      $user->dob = request('dob');
      $user->job = request('job');
      $user->role = "employee";
      $user->email = request('email');
      $password = request('password');
      $passwordConfirmation = request('confirmPassword');
      if($password == $passwordConfirmation){
        $user->password =  Hash::make($password);
        $user->save();
      }else{
        //error
        return redirect('/signup')->with('error','something went wrong');
      }
      return redirect('/signup')->with('success','created successfuly');

    }

    public function deleteUser($id){
      $user = User::find($id);
      if($user->role == "administrator"){
        return redirect('/employees')->with('error','You can not delete an administrator');
      }else{
        $user->is_activated = null;
        $user->save();
        return redirect('/employees')->with('success','Employee Deleted successfuly');
      }


    }

    public function requests(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $i=1;
      $users = User::where('company','=',Auth::user()->company)->where('is_activated','=',0)->paginate(10);
      return view('en.user-approves',compact('users','i','user','receved','email'));
    }

    public function approve(Request $request){
      // dd($request->all());
      if($request->approve == "Approve"){
      $cheks = $request->input('doneCheck');
      foreach($cheks as $check => $value){
        $user = User::find($value);
        $user->is_activated = True;
        $user->save();
      }
      return redirect()->back()->with('success','Added successfuly');
    }else{
      $cheks = $request->input('doneCheck');
      foreach($cheks as $check => $value){
        $user = User::find($value);
        $user->is_activated = NULL;
        $user->save();
      }
      return redirect()->back()->with('error','deleted successfuly');
    }
    }

    public function alert($id){
      $user = User::find($id);
      return view('en.delete-alert',compact('user'));
    }

    public function notific(){
      $user = User::all();
      $receved = user_email::where("user_id","=",Auth::id())->take(2)->latest()->get();
      $email = email::where("creator","=",Auth::id())->where('deleted','=',False)->take(2)->latest()->get();
      $notifications = Auth::user()->notifications()->paginate(4);
      // dd($notifications);
      return view('en.notifications',compact('notifications','user','receved','email'));
    }


    //ar
    public function Arindex(){
      return view('ar.edit-account');
    }
    public function Aremployees(){
      $users = User::Where('company','=',Auth::user()->company)->get();
      return view('ar.employees',compact('users'));
    }
    public function Arprofile(){
      $user = Auth::user();
      return view('ar.edit-account-profile',compact('user'));
    }
    public function Arnotifications(){
      return view('ar.edit-account-notifications');
    }
    public function Archangepassword(){
      return view('ar.edit-account-password');
    }

}
