<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Students;
use App\Fees;
use App\OnlineAttendance;


class AttendanceController extends Controller
{
    //

    public function index(){


            return view('attendance.view');


    }

    public function show(){



       return view('attendance.new');




    }


    public function store(Request $request){



        $student_name = $request->student_name;
         // find details of student with there name.
         $column = 'name'; 

         $getDetails = Students::where($column , '=', $student_name)->get();
         $get_student_id = Students::find($student_name);
         $student_id = $getDetails['0']['id'];

         
         //$column_id='student_id';
         
         $getFeesDetails = Fees::where('student_id','=',$student_id)->get()->toArray();
         


         foreach($getFeesDetails as $value){


                   $lectures_attended = $value['lectures_attended'];
                   $update_id = $value['id'];
         }

   
         //   print_r($update_id);

         // update lectures attended by Student.
            $update = Fees::find($update_id);

           $update->lectures_attended = $lectures_attended+1;

            $update->save();

           



           return view('attendance.new');


    }
}
