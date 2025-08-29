<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function viewData(){
        $users= DB::Select('Select * from users');
        return view('viewData',['users'=>$users]);
    }

    public function insertData(Request $request)
    {
         $request->validate([
        'username' => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'contact'  => 'required|digits:10',
    ]);

    $query = DB::table('users')->insert([
        'name'    => $request->username,
        'email'   => $request->email,
        'contact' => $request->contact,
    ]);

        if ($query) {
             return redirect()->route('view-user.get')->with('success', 'Data inserted successfully!');
        } else {
            return "Something went wrong.";
        }
    }

    public function deleteRow($id)
    {
        $query = DB::table('users')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('view-user.get')->with('success', 'Data deleted successfully!');
        } else {
            return redirect()->route('view-user.get')->with('error', 'Something went wrong.');
        }
    }

    public function updateData(Request $request,$id){
        $request->validate([
            'username' =>'required|string|max:250',
            'email'    =>'required|email',
            'contact'  =>'required|digits:10'
        ]);
        $query = DB::table('users')->where('id',$id)
                                   ->update([
                                       'name' =>$request->username,
                                       'email'    =>$request->email,
                                       'contact'  =>$request->contact     
                                   ]);
           if($query || $query === 0){

            return redirect()->route('view-user.get')->with('success','Data updated Successfully');
           }else{
            return "somthing went wrong";
           }                        
    }

}
