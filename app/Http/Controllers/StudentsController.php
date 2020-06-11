<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;

    function __construct() {
        $this->students = config('students');
    }

    // Students index
    public function index() {
        $students = $this->students;

        return view('students.index', compact('students'));
    }

    //Students show
    public function show($id) {

        // 404 check
        $student = $this->checkStudentById($id, $this->students);
        
        if (! $student) {
            abort('404');
        }

        return view('students.show');
    }

    // Student ID check
    private function checkStudentById($id, $array) {
        foreach ($array as $student) {
            if ( $student['id'] == $id) {
                return $student;
            }
        }
        return false;
    }
}
