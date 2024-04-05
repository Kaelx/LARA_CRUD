<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    //FETCH DATA FROM DATABASE
    public function student(){
        $students = Student::all();
        return view('main',['students' => $students]);
    }

    //GOING IN CREATE PAGE
    public function create(){
        return view('create');

    }

    //STORE DATA FUNCTION
    public function store(Request $request){
        // dd($request->all());

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'contact' => 'required|numeric'
        ]);

        $newData = Student::create($data);
        return redirect(route('main')) ->with('success','Data Added Successfully');

    }

    //EDIT DATA FUNCTION
    public function edit(Student $student){
        return view('edit', ['student' => $student]);
    }


    //UPDATE DATA FUNCTION
    public function update(Student $student, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'contact' => 'required|numeric'
        ]);

        $student->update($data);
        return redirect(route('main')) ->with('success','Data Updated Successfully');
    }

    //DELETE DATA FUNCTION
    public function delete(Student $student){
        $student->delete();
        return redirect(route('main')) ->with('success','Data Deleted Successfully');
    }

}
