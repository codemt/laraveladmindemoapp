<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class AdminController extends Controller
{
    //
    public function login(){


            return view('admin.login');

    }
    

    public function getStudents(Request $request){

            
           $students = Students::All();
           //return $students; 
           return view('students.students')->with('students',$students);

    }
    public function createNew(){

            
        return view('students.create');

    }
    public function store(Request $request)
    {
        $new = new Students();

        $new->first_name = $request->input('first_name');
        $new->last_name = $request->input('first_name');
        $new->middle_name = $request->input('middle_name');
        $new->course_name = $request->input('course_name');
        $new->student_email = $request->input('student_email');
        $new->parent_email = $request->input('parent_email');
        $new->student_mobile = $request->input('student_mobile');
        $new->parent_mobile = $request->input('parent_mobile');
        $new->address = $request->input('address');

        $new->save();

        $students = Students::All();
        return redirect('admin/students/all')->with('students',$students);
            

    }
    public function editStudents(Request $request,$id){

           // $id = $request->id;
            $student = Students::find($id);
            //return $student;
            return view('students.edit')->with('student',$student);
    }

}
