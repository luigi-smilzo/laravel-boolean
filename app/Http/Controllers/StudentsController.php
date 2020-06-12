<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;
    private $genders;

    function __construct() {
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

    // Students index
    public function index() {
        $students = $this->students;
        $genders = $this->genders;

        return view('students.index', compact('students', 'genders'));
    }

    //Students show
    public function show($slug) {

        // 404 check
        $student = $this->checkStudentById($slug, $this->students);
        
        if (! $student) {
            abort('404');
        }

        return view('students.show', compact('student'));
    }

    // Student ID check
    private function checkStudentById($slug, $array) {
        foreach ($array as $student) {
            if ( $student['slug'] == $slug) {
                return $student;
            }
        }
        return false;
    }
}
