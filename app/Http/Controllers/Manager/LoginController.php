<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



use App\Manager;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
  
    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = '/manager.dashboard';
  
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
      return view('managers.manager_login');
    }
  
  
    public function login(Request $request)
    {
     
    
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
      ] );
      if (Auth::guard('manager')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // Log Him Now
        return redirect()->intended(route('manager.dashboard'));
      }else {
        session()->flash('sticky_error', 'Invalid Login');
        return back();
      }
    }
  
    public function logout(Request $request)
    {
      $this->guard()->logout();
  
      $request->session()->invalidate();
  
      return redirect()->route('manager.login');
    }
  
}
