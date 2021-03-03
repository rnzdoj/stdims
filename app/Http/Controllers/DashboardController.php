<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\User;
use App\ClassDivision;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

     /**
     * Display admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin() {
        if(auth()->user()->is('admin')) {
            $numberOfStudents = Student::count();
            $numberOfTeachers = Teacher::count();
            $numberOfClassDivisions = ClassDivision::count();
            $teachers = Teacher::paginate(5);
            $students = Student::paginate(15);
            return view('dashboard.admin.dashboard')
                        ->with('numberOfStudents', $numberOfStudents)
                        ->with('numberOfTeachers', $numberOfTeachers)
                        ->with('numberOfClassDivisions',  $numberOfClassDivisions)
                        ->with('teachers', $teachers)
                        ->with('i',1)
                        ->with('j',1)
                        ->with('students', $students);
        }
        abort(403);
    }
    /**
     * Display teacher dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacher() {
        if(auth()->user()->is('teacher') ){
            $class_division_id = User::findOrFail(Auth::user()->id)->teacher->class_division_id;
            $students = Student::where('class_division_id',  $class_division_id)->paginate(5);
            return view('dashboard.teacher.dashboard')
                    ->with('students', $students)
                    ->with('i',1);
        }
        abort(403);
    }
    /**
     * Display student dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function student() {
        
        return redirect()->route('student.show', Auth::user()->student->id);
    }
}