<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Students;
use App\Fees;
use App\OnlineAttendance;
use Carbon\Carbon;


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


       // return $request;

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

           
            //get today's Date
            $today = Carbon::now()->format('m/d/Y') ;
            $today_date = \Carbon\Carbon::createFromFormat('m/d/Y',$today);
            // update Attedance Table.
                $attendance_update = new OnlineAttendance();

                    $attendance_update->student_id = $student_id;
                    $attendance_update->student_name = $request->student_name;
                    $attendance_update->attended_on = $today_date; 


                    $attendance_update->save();

              
              //  $attendance_update->attended_on = 


           // return $today;

           $all_attendance = OnlineAttendance::all();

           return view('attendance.view')->with('all_attendance',$all_attendance);


    }

    public function getAllAttendanceData(){


        $all_attendance = OnlineAttendance::All();

        $student_id = array();
        foreach($all_attendance as $value)
        {

              array_push($student_id,$value['student_id']);

        }

        $name_details = array();
        foreach($student_id as $value)
        {

         array_push($name_details,Students::find($value));

        }


        $new_array = array();


        // foreach($all_attendance as $value){

        //    // $new_array['id'] = $all_attendance['id'];
        //    foreach($name_details as $name){

           
        //     array_push($new_array,$name['name']);


        //    }
        //    array_push($new_array,$value['id']);
        //    array_push($new_array,$value['attended_on']);
           
        // }
       
        // $all_attendance = json_decode($all_attendance,true);
        // foreach($name_details as $name)
        // {

        //         array_push($new_array,$name['name']);

        // }
        // $student_names =  json_encode($student_id,JSON_FORCE_OBJECT);

       //  $no = count($student_names);
        // for($i=0;$i<$no;$i++)
        // {

        //     $name_details = Students::find($student_names[$i]);

        // }
        
        // $new_array = json_encode($new_array,JSON_FORCE_OBJECT);

       // $all_details = array_merge($all_attendance,$name_details);
       //return  $new_array;

           return view('attendance.view',compact('all_attendance','name_details'));

    }
}
