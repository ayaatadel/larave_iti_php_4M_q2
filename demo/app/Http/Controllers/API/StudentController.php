<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        // return $students;
        return StudentResource::collection($students);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation On Data
        $stdudentValidator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|unique:students'
            ]
        );

        if ($stdudentValidator->fails()) {
            return response()->json(
                [
                    'validation_Errors' => $stdudentValidator->errors(),
                    // 'message' => 'check You data',
                    //    'typealert'=>'danger',
                ],
                422
            );
        }

        // $requestData=$request->all();
        $student = Student::create($request->all());
        //     // return $student;
        $studentResourceData = new StudentResource($student);
        return $studentResourceData;
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        // return $student;
        $studentResourceData = new StudentResource($student);
        return $studentResourceData;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
        $requestData = $request->all();
        $student->update($requestData);
        //  return $student;
        $studentResourceData = new StudentResource($student);
        return $studentResourceData;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return "Student Deleted Successfully";
    }
}
