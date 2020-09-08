<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

use Validator;

class AdminController extends Controller
{
    function index(){

        $users = DB::table('login')->where('type','=','employee')->get();
      
        return view('admin.index')->with('users',$users);  
    }
    public function reg()
    {
        return view('admin/register.index');
    }
    
    public function insert(Request $request){

        $validate = Validator:: make($request->all(),[
            'username' => 'required',
            'password' => 'required',
            'name' =>'required',
            'cname' =>'required',
            'mobile' =>'required',
        ]);
        if($validate->fails())
        {
            return back()->with('errors',$validate->errors())->withInput();
        }

        DB::table('login')->insert(['username'=>$request->username,'password'=>$request->password,'type'=>'employee','name'=>$request->name,'cname'=>$request->cname,'mobile'=>$request->mobile]); 

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $user = DB::table('login')->where('userId','=',$id)->get() ;
        return view('admin.edit')->with('user',$user);
    }    
    public function update($id,Request $request)
    {
        $validate = Validator:: make($request->all(),[
            'username' => 'required',
            'password' => 'required',
            'name' =>'required',
            'cname' =>'required',
            'mobile' =>'required',
        ]);
        if($validate->fails())
        {
            return back()->with('errors',$validate->errors())->withInput();
        }
        DB::table('login')->where('userId',$id)->update(['username'=>$request->username,'password'=>$request->password,'name'=>$request->name,'cname'=>$request->cname,'mobile'=>$request->mobile]);

        return redirect()->route('admin.index');
    }

    public function delete($id,Request $request)
    {
        $user = DB::table('login')->where('userId','=',$id)->get();
        return view('admin.delete')->with('user',$user);
    }
    public function destroy($id,Request $request)
    {
        DB::table('login')->where('userId','=',$id)->delete();
        return redirect()->route('admin.index');
    }

    
}
