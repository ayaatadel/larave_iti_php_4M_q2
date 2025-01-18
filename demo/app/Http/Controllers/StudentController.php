<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Track;
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

        // model  => name of table (جمع) name model (مفرد)
        // $students = Student::paginate(5);
        $students=Student::orderBy('created_at',"desc")-> paginate(3);

        return view('students', ["students" => $students]);
    }

    function view($id)
    {
        // find ==> user
        // findOrFail  ==> check id ==> found(return)  ==> notFount =>(404)
        $student = Student::findOrFail($id);
        // ["student"=>student]
        // dd($student);
        return view('view', compact('student'));
    }

    function destroy($id)
    {
        $student = Student::findOrFail($id);  // single student
        $student->delete();
        // route name
        return to_route('students.index');
    }

    // create new student ==> update
    // from ===> select all data ==> strore
    function create()
    {
        $tracks=Track::all();
        return view('create',compact('tracks'));
    }

    function store()
    {
        // "name" => "iti"
        // "email" => "iti@gmail.com"
        // "image" => "jj.png"
        // "gender" => "male"
        // dump($_POST);
        // dump(request());
        $requestData = request()->all();
        // dd($requestData);
        //==> model ==>class
        // $student = new Student();
        // $student->name = $requestData['name'];
        // $student->email = $requestData['email'];
        // $student->image = $requestData['image'];
        // $student->gender = $requestData['gender'];
        Student::create($requestData);
        // $student->save();
        return to_route('students.index');
    }

    function edit($id)
    {
     $student=Student::findOrFail($id);
     return view('update',compact("student"));
    }

    function update($id)
    {
        $student=Student::findOrFail($id);
        $requestData=request()->all();
        // dd($requestData);
        $student->update($requestData);
        return to_route('students.index');


    }
}
