<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use App\Worker;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $studentcount = Student::all()->count();
        $teachercount = Teacher::all()->count();
        $workercount = Worker::all()->count();

        return view('admin.index',compact('studentcount','teachercount','workercount'));
    }
}
