<?php

namespace App\Http\Controllers\SuperAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cusinfo;
use App\Customer;
use App\Admin;
use Auth;
use DB;
use App\Addpayment;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 
    
    public function dashboard(){
        return view('superadmin.admin_dashboard');
    }
    public function addcustomer(){
        $cusinfo_id=cusinfo::max('id');
        $accountno=mt_rand(1000 .$cusinfo_id+1,9999 .$cusinfo_id+1);
        return view('superadmin.admin_addcustomer',compact('accountno') );
    }

    public function storecustomer(Request $request){

        $this->validate($request,[
            'password' => 'required',
            'email' => 'required|string|email|max:100|unique:customers',
            'name' => 'required',
            'phone' => 'required',
            'accountno' => 'required|unique:cusinfos',
        ]);

        $cusinfo=new cusinfo;
        $cusinfo->name=$request->name;
        $cusinfo->phone=$request->phone;
        $cusinfo->nid=$request->nid;
        $cusinfo->c_address=$request->c_address;
        $cusinfo->p_address=$request->p_address;
        $cusinfo->photo=$request->photo;
        $cusinfo->admin_id=Auth::id();
        $cusinfo->accountno=$request->accountno;

       if($cusinfo->save()){
           $cusinfo_id=$cusinfo->id;
           Customer::insert([
               'cusinfo_id'=>$cusinfo_id,
               'email'=>$request->email,
            //    'password'=>Hash::make($request->password)
            'password'=>bcrypt($request->password)

               ]);
       }
       return redirect()->route('admin.allcustomer');
    }
    
    public function allcustomer(){

        $allcustomers=cusinfo::latest()->get();
        
        return view('superadmin.allcustomer',compact('allcustomers'));
    }

    public function paycustomer($id){

        $month = date("F", strtotime('-1 month'));

        $date=date("Y.m.d");

        $year = date("Y");

        $amount="1000";

        $cusinfo=DB::table('cusinfos')
                ->where('id',$id)
                ->first();
        return view('superadmin.paycustomer',compact('cusinfo','month','year','amount'));
    }
    public function paystore(Request $request){

    
       
        // $allcustomers=cusinfo::latest()->get();
        
        // return view('superadmin.allcustomer',compact('allcustomers'));
        $this->validate($request,[
            'date' => 'required',
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required',
        ]);
        $pay= new Addpayment;

        $pay->admin_id=Auth::id();

        $pay->cusinfo_id=$request->cusinfo_id;

        $pay->date=$request->date;
        $pay->month=$request->month;
        $pay->year=$request->year;
       
        $pay->amount=$request->amount;
        $pay->save();
        return redirect()->route('admin.allcustomer');
    }

    public function paymentdetails(){


        //  $cusinfos=DB::table('customers')
        //          ->join('cusinfos','customers.cusinfo_id','cusinfos.id')
        //          ->select('customers.*','cusinfos.*')->where('cusinfo_id',Auth::id())->get();

                 $paymentdetails=DB::table('addpayments')
                 ->join('cusinfos','addpayments.cusinfo_id','cusinfos.id')
                 
                 ->select('addpayments.*','cusinfos.*')->orderBy('date','desc')->get();
                
                //  ->take(20)->get();
        
        return view('superadmin.payment_details',compact('paymentdetails'));
    }

    public function paymenthistory($id){



        $cusinfos=cusinfo::find($id);
        

        $paymenthistorys=DB::table('addpayments')
        ->join('cusinfos','addpayments.cusinfo_id','cusinfos.id')
        ->where('cusinfo_id',$id)
        ->select('addpayments.*','cusinfos.*')->orderBy('date','desc')->get();
        
       
        return view('superadmin.paymenthistory',compact('paymenthistorys','cusinfos'));
    }

    public function cusprofile(){

        $cusprofiles=cusinfo::latest()->get();
        
        return view('superadmin.cusprofile',compact('cusprofiles'));
    }

    public function personprofile($id){



       $customer=Customer::find($id);
        
        // $hashedPassword = Customer::find($id)->password;

       

        // $paymenthistorys=DB::table('addpayments')
        // ->join('cusinfos','addpayments.cusinfo_id','cusinfos.id')
        // ->join('cusinfos','customers.cusinfo_id','cusinfos.id')
        // ->where('cusinfo_id',$id)
        // ->select('addpayments.*','cusinfos.*','customers.*')->orderBy('date','desc')->get();

        $cusinfos=DB::table('customers')
        ->join('cusinfos','customers.cusinfo_id','cusinfos.id')


        ->select('customers.*','cusinfos.*')->where('cusinfo_id',$id)->get();
        
      
        return view('superadmin.personprofile',compact('cusinfos','customer'));
    }

    public function updatePassword(Request $request,$id){

       
       
       $customer = Customer::find($id);

       $customer->password = Hash::make($request->password);
       $customer->save();


       session()->flash('success', 'password change successfully');
       return back();
         
        //  // $hashedPassword = Customer::find($id)->password;
 
        
 
        //  // $paymenthistorys=DB::table('addpayments')
        //  // ->join('cusinfos','addpayments.cusinfo_id','cusinfos.id')
        //  // ->join('cusinfos','customers.cusinfo_id','cusinfos.id')
        //  // ->where('cusinfo_id',$id)
        //  // ->select('addpayments.*','cusinfos.*','customers.*')->orderBy('date','desc')->get();
 
        //  $cusinfos=DB::table('customers')
        //  ->join('cusinfos','customers.cusinfo_id','cusinfos.id')
 
 
        //  ->select('customers.*','cusinfos.*')->where('cusinfo_id',$id)->get();
         
       
     }


     public function adminpassword(){

        $customer =Auth::user()->get();

        
        
        return view('superadmin.adminpassword',compact('customer'));


     }

     public function adminpasswordupdate(Request $request)
     {
         $this->validate($request,[
             'old_password' => 'required',
             'password' => 'required|confirmed',
         ]);
 
         $hashedPassword = Auth::user()->password;

         if (Hash::check($request->old_password,$hashedPassword))
         {
             if (!Hash::check($request->password,$hashedPassword))
             {
                 $user = Admin::find(Auth::id());

                
                 $user->password = Hash::make($request->password);
                 $user->save();
                 session()->flash('success', 'password change successfully');
       
                 Auth::logout();
                 return redirect()->back();
             } else {
                //  Toastr::error('New password cannot be the same as old password.','Error');
                session()->flash('success', 'New password cannot be the same as old password.');
                 return redirect()->back();
             }
         } else {
            //  Toastr::error('Current password not match.','Error');

            session()->flash('success', 'Current password not match.');
             return redirect()->back();
         }
 
     }





    


}
