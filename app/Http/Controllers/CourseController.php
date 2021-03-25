<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Inertia\Inertia;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return Inertia::render('Course/Index',[
            'course'=> $course
        ])  
           ;
    }
}
  