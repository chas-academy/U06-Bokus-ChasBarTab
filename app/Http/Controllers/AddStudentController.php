<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAdd;
class AddStudentController extends Controller
{
    //

    public function index()
    {
            return view('addStudent');
    }

    public function show()
    {
        return view('welcome');
    }

    function add(Request $req)
    {
        $student = new StudentAdd;
        $student->class = $req->class;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->save();
        return view('/studentNew');
        
    }

    
}