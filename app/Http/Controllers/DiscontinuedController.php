<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateStudentsRequest;
use Illuminate\Http\Request;
use App\Events\CreateAdmissionEvent;
use App\Discontinued;

class DiscontinuedController extends Controller
{
    //

    public function index(){


        $students = Discontinued::All();
        //return $students; 
        return view('discontinued.index')->with('students',$students);



    }

    public function create(){


            return view('discontinued.add');


    }
    public function store(CreateStudentsRequest $request){


        
            $discontinued_data = $request->all();

            $new = new Discontinued();

            $new->name = $discontinued_data['name'];
            $new->course_name = $discontinued_data['course_name'];
            $new->student_email = $discontinued_data['student_email'];
            $new->parent_email = $discontinued_data['parent_email'];
            $new->student_mobile = $discontinued_data['student_mobile'];
            $new->parent_mobile = $discontinued_data['parent_mobile'];
            $new->address = $discontinued_data['address'];
    
            $new->save();


            return redirect ('admin/students/discontinued/all');
            




    }
}
