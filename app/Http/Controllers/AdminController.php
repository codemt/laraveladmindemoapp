<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateStudentsRequest;


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
    public function store(CreateStudentsRequest $request)
    {

        return $request;
        $new = new Students();

        $new->name = $request->input('name');
        $new->course_name = $request->input('course_name');
        $new->student_email = $request->input('student_email');
        $new->parent_email = $request->input('parent_email');
        $new->student_mobile = $request->input('student_mobile');
        $new->parent_mobile = $request->input('parent_mobile');
        $new->address = $request->input('address');

        $new->save();


        $data = [

            'title'=>'New Admission Done',
            'name'=>$request->input('name'),
            'email'=>$request->input('student_email'),
            'mobile'=>$request->input('student_mobile'),
          

     ];

    //  Mail::send('emails.template',$data,function($message){


    //     $message->to('ashikshibili@gmail.com','Ashik')->subject('Hello From Team');

    //  });
    //  Mail::send('emails.newadmission',$data,function($message){


    //     $message->to('mithilesh.tarkar@ves.ac.in','Mithilesh')->subject('Hello From Team');

    //  });

        $students = Students::All();
        return redirect('admin/students/all')->with('students',$students);
            

    }
    public function editStudents(Request $request,$id){

           // $id = $request->id;
            $student = Students::find($id);
            //return $student;
            return view('students.edit')->with('student',$student);
    }

    public function updateStudents(Request $request)
    {

        $update = Students::find($request->id);
        $update->name = $request->input('name');
        $update->course_name = $request->input('course_name');
        $update->student_email = $request->input('student_email');
        $update->parent_email = $request->input('parent_email');
        $update->student_mobile = $request->input('student_mobile');
        $update->parent_mobile = $request->input('parent_mobile');
        $update->address = $request->input('address');

        $update->save();
        $students = Students::All();
        return redirect('admin/students/all')->with('students',$students);

    }

    public function getNames(){


        $students = Students::All();

        $getstudentnames = DB::table('students')
        ->select(DB::raw('name as name'))
        ->get();

        return $getstudentnames;

    }

}
