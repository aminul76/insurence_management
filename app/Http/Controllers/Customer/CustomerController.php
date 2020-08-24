<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Customer;
use App\cusinfo;

use DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    } 
    
    public function dashboard(){
        
        return view('customers.customer_dashboard');
    }
   

    public function profile(){

        // $hashedPassword = Auth::user()->password;
        // $password=decrypt($hashedPassword);
        // dd($password);
        $cusinfos=DB::table('customers')
                 ->join('cusinfos','customers.cusinfo_id','cusinfos.id')
                 ->select('customers.*','cusinfos.*')->where('cusinfo_id',Auth::id())->get();
             
        // $cusinfos=Auth::user()->cusinfos()->get();
        // dd($cusinfos);
        return view('customers.profile',compact('cusinfos'));
    }
}
