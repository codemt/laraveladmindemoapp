<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use Illuminate\Support\Facades\DB;
use App\Students;
use Auth;
use Carbon\Carbon;
use App\OnlineAttendance;
class FeesController extends Controller
{
    //
    public function index(){


            $fees = Fees::All();
            return view('students.fees')->with('fees',$fees);


            // $fees = Fees::All();
            // return view('fees.index')->with('fees',$fees);

    }
    public function AllFees(){


      $fees = Fees::All();
      return view('fees.index')->with('fees',$fees);



    }

    public function view(){


          // view date wise fees.
          $fees = Fees::All();
          return view('fees.view')->with('fees',$fees);


    }
    public function create(){


            return view('fees.create');

    }

    public function store(Request $request){


          //return $request;
            $student_name = $request->student_name;
          // dd($student_name);

          // find details of student with there name.
          $column = 'name'; // This is the name of the column you wish to search

        $getDetails = Students::where($column , '=', $student_name)->get();
          $get_student_id = Students::find($student_name);
            //  return $getDetails;
            $student_id = $getDetails['0']['id'];
            $duration = $request->duration;
          //  return $duration;
            $fees_amount = $request->fees_amount;
            $valid_till = $request->valid_till;
            $student_name = $request->student_name;
            $course_name = $request->course_name;
             $start_date = \Carbon\Carbon::createFromFormat('m/d/Y', $valid_till);
            // return $start_date;   


            // make previous fee - false
            $old_fees = Fees::where('student_id',$student_id)->where('is_latest',true)->first();

            $old_fees->is_latest = false;
            $old_fees->save();

            // make previous attendance - false
            DB::statement("UPDATE online_attendances SET is_latest = false where student_id=?",[$student_id]);


            // record latest fee
            $latest_fee = true;
            $fees = new Fees();
            $fees->student_id = $student_id;
            $fees->name = $student_name;
            $fees->course_name = $course_name;
            $fees->duration = $duration;
            $fees->lectures_alloted = $request->lectures_alloted;
            $fees->fee_amount = $fees_amount;
            $fees->valid_till = $start_date;
            $fees->is_latest = $latest_fee;

            $fees->save();


            
        //     $save->valid_till = $start_date;
              return redirect('admin/students/fees/all');
            

    }

    public function getTotalFees(Request $request){


      $valid_till = $request->valid_till;
      $start_date = $request->start_date;

       //  return $valid_till;
       $start = \Carbon\Carbon::createFromFormat('m/d/Y', $start_date);
       $end_date = \Carbon\Carbon::createFromFormat('m/d/Y', $valid_till);

      $getfees = DB::table('fees')
            ->whereBetween('valid_till',array($start,$end_date))
            ->get();


        $getTotal = DB::table('fees')
        ->select(DB::raw('SUM(fee_amount) as total'))
        ->whereBetween('valid_till',array($start,$end_date))
        ->get();
                      

        return json_encode(array("getFees" => $getfees, "getTotal" => $getTotal));


    }
}



// $getfees = DB::table('fees')
// ->select(DB::raw('SUM(fee_amount) as total'))
// ->whereBetween('valid_till',array($start,$end_date))
// ->get();