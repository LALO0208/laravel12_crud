<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        //validate data

        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|digits:10|unique:students,phone',
        ]);

        //dd('ok');

        Student::create($request->all());
        return back()->with('success', 'Student added succesfully');
    }
}
