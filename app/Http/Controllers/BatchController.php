<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Batches;
use Illuminate\Support\Facades\DB;

class BatchController extends Controller
{
    //

    public function index(){


        // Monday
        $getMondayBatch = DB::table('batches')
        ->select('student_id')
        ->where('batch_name','Monday')
        ->get();


        // Tuesday
        $getSundayBatch = DB::table('batches')
        ->select('student_id')
        ->where('batch_name','Sunday')
        ->get();

        // Wednesday


        // Thursday


        // Friday

    
        // Saturday

            return $getSundayBatch;

            return view('batches.index');


    }

    public function create(){



            return view('batches.create');

    }

    public function store(Request $request){


               //return $request;
               $student_name = $request->student_name;
               // dd($student_name);
     
               // find details of student with there name.
               $column = 'name'; // This is the name of the column you wish to search
     
             $getDetails = Students::where($column , '=', $student_name)->get();
               $get_student_id = Students::find($student_name);
                  //return $getDetails;
                 $student_id = $getDetails['0']['id'];


                $get_batch = new Batches();

                $get_batch->batch_name = $request->batch_name;
                $get_batch->student_id = $student_id;


                $get_batch->save();

                return back()->with('Status','Added Successfully');
                 
    }

}
