<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAdd;
class AddStudentController extends Controller
{
    //

    public function index()
    {
        $eds = \DB::table("educational_programes")->get();
            return view('addStudent', [
                'eds' => $eds
            ]);
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
