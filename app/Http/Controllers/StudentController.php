<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    //

    public function index()
    {
            return view('addStudent');
    }

    function add(Request $req)
    {
        //dd($req);
        //print_r($req->input());
        $student = new Student;
        $student->class = $req->class;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->save();
        return view('/');
    }

    
}
