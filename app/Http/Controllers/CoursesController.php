<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
class CoursesController extends Controller
{
    //
    public function index(){


            $courses = Courses::all();


            $id = 1; 
           // return view('courses.index')->with('courses',$courses);
            return view('courses.index',compact('courses','id'));



    }

    public function create(){


        return view('courses.add');



    }
    public function store(Request $request){



            $course_name = $request->course_name;


            $new_course = new Courses();
            $new_course->course_name = $course_name;
            $new_course->save();


            return redirect('admin/students/courses/all');

    }


    public function getCourses(){



        $allCourses = Courses::all();

        return $allCourses;

    }
}
