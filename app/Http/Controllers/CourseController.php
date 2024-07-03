<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Classroom;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $courses = Course::with(['classroom', 'teacher'])->get();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        $teachers = User::where('role', 'teacher')->get();
        return view('courses.create', compact('classrooms', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'classroom_id' => 'required|exists:classrooms,id',
            'teacher_id' => 'required|exists:users,id',
            'price' => 'required',
        ]);

        Course::create($request->only(['name', 'description', 'classroom_id', 'teacher_id', 'price']));

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $classrooms = Classroom::all();
        $teachers = User::where('role', 'teacher')->get();
        return view('courses.edit', compact('course', 'classrooms', 'teachers'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'classroom_id' => 'required|exists:classrooms,id',
            'teacher_id' => 'required|exists:users,id',
            'price' => 'required',
        ]);

        $course->update($request->only(['name', 'description', 'classroom_id', 'teacher_id', 'price']));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }

    public function teacherCourses()
    {
        $user = auth()->user();
        $courses = $user->courses;
        return view('courses.teacherCourses', compact('courses'));
    }
}