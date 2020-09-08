<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

use Validator;

class EmployeeController extends Controller
{
    function index()
    {
        $info = DB::table('job')->get();
        return view('employee.index')->with('info',$info);
    }

    function addNewJob()
    {
        return view('employee.addJob');
    }
    public function add(Request $request)
    {
        $validate = Validator:: make($request->all(),[
            'cname' => 'required',
            'title' => 'required',
            'location' =>'required',
            'salary' =>'required',
        ]);
        if($validate->fails())
        {
            return back()->with('errors',$validate->errors())->withInput();
        }
        DB::table('job')->insert(['cname'=>$request->cname,'title'=>$request->title,'location'=>$request->location,'salary'=>$request->salary]);

        return redirect()->route('employee.index');
    }

    public function editJob($id)
    {
        $info = DB::table('job')->where('id','=',$id)->get() ;
        return view('employee.editJob')->with('info',$info);
    }
    public function update($id,Request $request)
    {
        $validate = Validator:: make($request->all(),[
            'cname' => 'required',
            'title' => 'required',
            'location' =>'required',
            'salary' =>'required',
        ]);
        if($validate->fails())
        {
            return back()->with('errors',$validate->errors())->withInput();
        }
        DB::table('job')->where('id',$id)->update(['cname'=>$request->cname,'title'=>$request->title,'location'=>$request->location,'salary'=>$request->salary]);

        return redirect()->route('employee.index');
    }

    public function deleteJob($id)
    {
        $info = DB::table('job')->where('id','=',$id)->get() ;
        return view('employee.deleteJob')->with('info',$info);
    }
    public function destroy($id)
    {
        DB::table('job')->where('id',$id)->delete();
        return redirect()->route('employee.index');
    }
}
