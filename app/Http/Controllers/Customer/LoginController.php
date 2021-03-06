<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;


use App\Customer;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
  
    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = '/customer.dashboard';
  
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
      return view('customers.customer_login');
    }
  
  
    public function login(Request $request)
    {
     
    
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
      ] );
      if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // Log Him Now
        return redirect()->intended(route('customer.dashboard'));
      }else {
        session()->flash('sticky_error', 'Invalid Login');
        return back();
      }
    }
  
    public function logout(Request $request)
    {
      $this->guard()->logout();
  
      $request->session()->invalidate();
  
      return redirect()->route('customer.login');
    }
  
}
