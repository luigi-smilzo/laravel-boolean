<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private $students;

    function __construct() {
        $this->students = config('students');
    }

    public function index() {
        $students = $this->students;

        return view('students.index', compact('students'));
    }
}
