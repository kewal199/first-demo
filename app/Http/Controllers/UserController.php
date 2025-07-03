<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view;
class UserController extends Controller
{
    function getUser(){
        return view('user');
    }
    function aboutUser(){
        return "This is about section";
    }
    function getUserName(){
        // return "User Name is ".$name;
        $name="kewal";
        $user=['kewal','Anup','prem'];
        return view('getuser',['name'=>$name,'users'=>$user]);
    }
    function adminLogin(){
        // if (view :: exists('admin.adminSignin')){
        //      return view('admin.adminSignin');    

        // }else{
        //     echo "No file found";
        // }
         if (view :: exists('admin.adminSignin')){
             return view('admin.adminSignin');    

        }else{
            echo "No file found";
        }
       
    }

    function addUser(Request $request){
       echo $request->username;
       echo "<br>";
       echo $request->email;
       echo "<br>";
       echo $request->city;
     
    }
     function addUser2(Request $request){
        echo $request->city;
        echo "<br>";
        echo $request->age;
        echo"<br>";
        echo $request->gender;
        echo"<br>";
        print_r($request->skill);

     }
}
