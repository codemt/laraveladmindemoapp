<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Batches;
use Illuminate\Support\Facades\DB;

class BatchController extends Controller
{
    

    public function index(){


        // Monday
        $getMondayBatch = DB::table('students')
        ->select('name')
        ->leftjoin('batches','batches.student_id','=','students.id')
        ->where('batch_name','Monday')
        ->get();


        // Tuesday
        $getTuesdayBatch = DB::table('students')
        ->select('name')
        ->leftjoin('batches','batches.student_id','=','students.id')
        ->where('batch_name','tuesday')
        ->get();

         // Wednesday

        $getWednesdayBatch = DB::table('students')
        ->select('name')
        ->leftjoin('batches','batches.student_id','=','students.id')
        ->where('batch_name','Wednesday')
        ->get();

         // Thursday

         $getThursdayBatch = DB::table('students')
         ->select('name')
         ->leftjoin('batches','batches.student_id','=','students.id')
         ->where('batch_name','Thursday')
         ->get();


        // Friday

        $getFridayBatch = DB::table('students')
        ->select('name')
        ->leftjoin('batches','batches.student_id','=','students.id')
        ->where('batch_name','Friday')
        ->get();

    
         // Saturday

         $getSaturdayBatch = DB::table('students')
         ->select('name')
         ->leftjoin('batches','batches.student_id','=','students.id')
         ->where('batch_name','Saturday')
         ->get();

         // Sunday

         $getSundayBatch = DB::table('students')
         ->select('name')
         ->leftjoin('batches','batches.student_id','=','students.id')
         ->where('batch_name','Sunday')
         ->get();


        
         $monday = array();
         $tuesday = array();
         $wednesday = array();
         $thursday = array();
         $friday = array();
         $saturday = array();
         $sunday = array();

         $mondaybatch = json_decode($getMondayBatch,true);
         $tuesdaybatch = json_decode($getTuesdayBatch,true);
         $wednesdaybatch = json_decode($getWednesdayBatch,true);
         $thursdaybatch = json_decode($getWednesdayBatch,true);
         $fridaybatch = json_decode($getFridayBatch,true);
         $saturdaybatch = json_decode($getSaturdayBatch,true);
         $sundaybatch = json_decode($getSundayBatch,true);


         foreach($mondaybatch as $value)
        {

               array_push($monday,$value['name']);

        }
        foreach($tuesdaybatch as $value)
        {

               array_push($tuesday,$value['name']);

        }
        foreach($wednesdaybatch as $value)
        {

               array_push($wednesdaybatch,$value['name']);

        }
        foreach($thursdaybatch as $value)
        {

               array_push($thursday,$value['name']);

        }
        foreach($fridaybatch as $value)
        {

               array_push($friday,$value['name']);

        }
        foreach($saturdaybatch as $value)
        {

               array_push($saturday,$value['name']);

        }
        foreach($sundaybatch as $value)
        {

               array_push($sunday,$value['name']);

        }

        // for($i=0;$i<=count($getMondayBatch);$i++)
        // {

        //     $monday = array_push($monday,$value[$i]);

        // }
      

        $monday = json_encode($monday,JSON_FORCE_OBJECT);
        $tuesday = json_encode($tuesday,JSON_FORCE_OBJECT);
        $wednesday = json_encode($wednesday,JSON_FORCE_OBJECT);
        $thursday = json_encode($thursday,JSON_FORCE_OBJECT);
        $friday = json_encode($friday,JSON_FORCE_OBJECT);
        $saturday = json_encode($saturday,JSON_FORCE_OBJECT);
        $sunday = json_encode($sunday,JSON_FORCE_OBJECT);


    //   $mondaykey = array('Monday'); 
       
      // $mondaybatches = array_fill_keys($mondaykey,$monday);
       
          
     //  array_push($allBatches['monday'],$monday);
     // return json_encode($mondaybatches,true);

      return view('batches.index',compact('monday','tuesday','wednesday','thursday','friday','saturday','sunday'));


    }

    public function create()
    {



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
