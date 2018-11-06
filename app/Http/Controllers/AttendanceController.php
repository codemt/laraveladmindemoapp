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

        // return print_r($student_name);

        // exit();
         // find details of student with there name.
         $column = 'name'; 

         $getDetails = Students::where($column , '=', $student_name)->get();
         $get_student_id = Students::find($student_name);
         $student_id = $getDetails['0']['id'];

         
         //$column_id='student_id';
         
         $getFeesDetails = Fees::where('student_id','=',$student_id)->where('is_latest',true)->get()->toArray();
         
         
         
         foreach($getFeesDetails as $value){


                   $lectures_attended = $value['lectures_attended'];
                   $lectures_alloted = $value['lectures_alloted'];
                   $update_id = $value['id'];
         }

   
         //   print_r($update_id);

        

            if($lectures_alloted == $lectures_attended){


                        $fees = Fees::find($update_id);
                        // $fees->is_latest = false;
                        $fees->save();
                        $message = 'Attendance is Full for Alloted Lectures';
                        return $message;
            }
            else{


                         // update lectures attended by Student.
                        $update = Fees::find($update_id);

                        $update->lectures_attended = $lectures_attended+1;
            
                        $update->save();

                    //get today's Date
                     $today = Carbon::now()->format('m/d/Y') ;
                     $today_date = \Carbon\Carbon::createFromFormat('m/d/Y',$today);
                     // update Attedance Table.

                        $latest_attendance = true;
                        $attendance_update = new OnlineAttendance();

                            $attendance_update->student_id = $student_id;
                            $attendance_update->student_name = $request->student_name;
                            $attendance_update->attended_on = $today_date; 
                            $attendance_update->is_latest = $latest_attendance;    

                            $attendance_update->save();

              
                        //  $attendance_update->attended_on = 


                    // return $today;

                    $all_attendance = OnlineAttendance::all();

                        // get 

                        return $student_id;







            }
            
          //  return redirect('/admin/students/attendance/'.$student_id);

          // return view('attendance.individual')->with('all_attendance',$all_attendance);


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

    public function viewAttendance($id){




        // $getFeesDetails = Fees::where('student_id','=',$student_id)->get()->toArray();
        $getAttendance = OnlineAttendance::where('student_id',$id)
                        ->where('is_latest',true)
                        ->get();

        

        $getLecturesAlloted = Fees::where('student_id',$id)->where('is_latest',true)->get()->toArray();
       


      
        
        foreach($getLecturesAlloted as $getLecturesAlloted){

            $totalAlloted = $getLecturesAlloted['lectures_alloted'];
            $lectures_attended = $getLecturesAlloted['lectures_attended'];    

        }

        foreach($getAttendance as $value){


                $name = $value['student_name'];

        }
       


       
       //return view('attendance.individual')->compact('totalAlloted',';

       return view('attendance.individual',compact('getAttendance','totalAlloted','lectures_attended','name'));




    }
}
