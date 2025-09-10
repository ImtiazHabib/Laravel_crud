<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function show_index_page(){
        $users = DB::table('users')->get();
        return view('index',compact('users'));
    }

    public function add_new_user(Request $request){

       DB::table('users')->insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'phone' =>$request->phone,
       ]);

       return redirect('/')->with('success','New User Added successfully');
    }//end method

    public function UpdateUser(Request $request,$id){
       
       
        // search the id 
        $update_user_find = DB::table('users')->where('id','=',$id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'phone' =>$request->phone,
        ]);

        return redirect('/')->with('success','Update User successfully');


    }

    public function delete_user($id){
     
      DB::table('users')->where('id',$id)->delete();
      return redirect('/')->with('success','user deleted');
    }
}
