<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function login(Request $request)
     {
       $this->validateLogin($request);

       if ($this->hasTooManyLoginAttempts($request)) {
         $this->fireLockoutEvent($request);

         return $this->sendLockoutResponse($request);
       }

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_activated' => 1])) {
         return redirect()->intended('/');
       }  else {
         $this->incrementLoginAttempts($request);
         return redirect()->back()->with('error','account not active !');
       }

       $this->incrementLoginAttempts($request);
       return $this->sendFailedLoginResponse($request);
     }
     
     public function __construct()
     {
         $this->middleware('guest')->except('logout');
     }
     public function logout(Request $request)
     {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/login');
      }



}
