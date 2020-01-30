<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Educational_programes;
use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     * StudentController
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $educational_programes = Educational_programes::all();
        //$educational_programes = Educational_programe::all();
        return view('student', [
            'edu' => $educational_programes,
            'student' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('studentID', $id)->get();
        return view('showStudent', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
=======
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

    
>>>>>>> f074e952f72679cdea7aaad5a27d54d1966f98a9
}
