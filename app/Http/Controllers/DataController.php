<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DataController extends Controller
{
    public function userContact($contact){
        return view('contact',['contact'=>$contact]);
    }
    //
}
