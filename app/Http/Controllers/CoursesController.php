<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
class CoursesController extends Controller
{
    //
    public function create(){


       





    }

    public function getCourses(){



        $allCourses = Courses::all();

        return $allCourses;

    }
}
