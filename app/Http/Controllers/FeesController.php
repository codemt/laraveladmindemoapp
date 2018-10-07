<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Students;
use Carbon\Carbon;
class FeesController extends Controller
{
    //
    public function index(){


            $fees = Fees::All();
            return view('students.fees')->with('fees',$fees);


            // $fees = Fees::All();
            // return view('fees.index')->with('fees',$fees);

    }
    public function create(){


            return view('fees.create');

    }

    public function store(Request $request){


          //return $request;
            $student_name = $request->student_name;
          //  dd($student_name);

          // find details of student with there name.
          $column = 'name'; // This is the name of the column you wish to search

        $getDetails = Students::where($column , '=', $student_name)->get();
         //   $get_student_id = Students::find($student_name);
             //   return $getDetails;
            $student_id = $getDetails['0']['id'];
            $duration = $request->duration;
          //  return $duration;
            $fees_amount = $request->fees_amount;
            $valid_till = $request->valid_till;
            $student_name = $request->student_name;
            $course_name = $request->course_name;
            $start_date = \Carbon\Carbon::createFromFormat('d/m/Y', $valid_till);
            // return $start_date;   

            $fees = new Fees();
            $fees->student_id = $student_id;
            $fees->name = $student_name;
            $fees->course_name = $course_name;
            $fees->duration = $duration;
            $fees->fee_amount = $fees_amount;
            $fees->valid_till = $start_date;

            $fees->save();
        //     $save->valid_till = $valid_till;
              return $fees;
            

    }
}
