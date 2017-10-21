<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result=Student::all();
        $data['result']=$result;
        return view('studentList',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=Student::create($request->all());
        $student->save();        
        return redirect(url('/list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($studentId)
    {
        $data['student']=Student::findOrfail($studentId);
        return view('showStudent',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($studentId)
    {
        $data['student']=Student::findOrfail($studentId);
        return view('editStudent',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$studentId)
    {
        $student=Student::findOrfail($studentId);
        $student->update($request->all());
        $student->save();

        return redirect(url('/show/'.$studentId));
        
    }

    public function deleteStudent($studentId){
        $student=Student::findOrfail($studentId);
        $student->delete();
        return redirect(url('/list'));
    }
}
