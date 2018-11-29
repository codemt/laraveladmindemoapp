<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateStudentsRequest;
use App\Events\CreateAdmissionEvent;
use Event;
use App\Fees;
use App\OnlineAttendance;
use App\Batches;

class AdminController extends Controller
{
    //
    public function login(){


            return view('admin.login');

    }
    

    public function getStudents(Request $request){

            
           $students = Students::All();
           //return $students; 
           $id=1;
         //  return view('students.students')->with('students',$students);
           return view('students.students',compact('students','id'));



    }
    public function createNew(){

            
        return view('students.create');

    }
    public function store(CreateStudentsRequest $request)
    {

       
        $admission_data = $request->all();
      //  $admission_data['user'] = auth()->user();

       Event::fire(new CreateAdmissionEvent($admission_data));
        
    
       return response()->json(['success'=>true,'redirect'=>route('admin.students')]);
        // $students = Students::All();
        // return redirect('admin/students/all')->with('students',$students);
            

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


    public function deleteStudent($id){




            $student_fee_detail = Fees::where('student_id',$id);
            $student_attendance = OnlineAttendance::where('student_id',$id);
            $student = Students::find($id);
            $student_batch = Batches::where('student_id',$id);

            // delete dependant data 
            $student_batch->delete();
            $student_attendance->delete();
            $student_fee_detail->delete();

            $student->delete();
               // return $student_fee_detail;
           // $student->delete();



           return redirect('admin/students/all');

            


    }

}
