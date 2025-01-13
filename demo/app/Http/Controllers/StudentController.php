<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //


    function index()
    {
        // DB
        // $students=DB::table('students')->get();
        // dump($students);

        // model
        $students= Student::all();
        return view('students',["students"=>$students]);
    }

    function view($id)
    {
        $student= Student::find($id);
        // ["student"=>student]
        return view('view',compact('student'));

    }
}
