<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(){

        return view('admin.index');
    }
    public function reg(Request $request){


        DB::table('login')->insert(['username'=>$request->username,'password'=>$request->password,'type'=>'employee','name'=>$request->name,'cname'=>$request->cname,'mobile'=>$request->mobile]); 

        return view('admin/register.index');
    }
}
