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
}
