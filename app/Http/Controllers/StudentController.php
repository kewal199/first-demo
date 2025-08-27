<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents(){
        $data = New \App\Models\Student;
        echo $data->user_details();
        $student=\App\Models\Student::All();
        return view('students',['students'=>$student]);
    }
}
