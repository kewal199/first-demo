<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function show(){

        // return redirect()->to('home/page/done');
        return to_route('hm');
    }

    function user(){

        return to_route('user',["name"=>'kewal']);
    }
}
