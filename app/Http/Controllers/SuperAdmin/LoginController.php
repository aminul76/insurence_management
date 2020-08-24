<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Notifications\VerifyRegistration;
use App\User;
use App\Admin;
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
    protected $redirectTo = '/admin.dashboard';
  
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }
  
    public function showLoginForm()
    {
      return view('superadmin.admin_login');
    }
  
  
    public function login(Request $request)
    {
     
    
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
      ] );
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // Log Him Now
        return redirect()->intended(route('admin.dashboard'));
      }else {
        session()->flash('sticky_error', 'Invalid Login');
        return back();
      }
    }
  
    public function logout(Request $request)
    {
      $this->guard()->logout();
  
      $request->session()->invalidate();
  
      return redirect()->route('admin.login');
    }
  
  }