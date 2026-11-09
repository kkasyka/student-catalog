<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create($validated);

        return redirect('/students')->with('success', 'Студент успешно добавлен!');
    }
}
