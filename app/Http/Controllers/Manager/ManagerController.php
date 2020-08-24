<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:manager');
    } 
    
    public function dashboard(){
        return view('managers.manager_dashboard');
    }
}
