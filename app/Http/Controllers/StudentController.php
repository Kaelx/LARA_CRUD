<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('home', ['students' => $students]);

    }


    public function create(){
        return view('students.create');

    }

    
    public function store(Request $request){
        // dd($request->all());

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric'
        ]);

        $newData = Student::create($data);

        return redirect(route('home')) ->with('success', 'Student added successfully!');

    }

    
    public function edit(Student $student){
        return view('students.edit', ['student' => $student]);

    }

    public function update(Student $student, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric'
        ]);

        $student->update($data);

        return redirect(route('home')) ->with('success', 'Student updated successfully!');

    }

    public function delete(Student $student){
        $student->delete();

        return redirect(route('home')) ->with('success', 'Student deleted successfully!');

    }
}
