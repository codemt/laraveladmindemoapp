<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiries;
use Illuminate\Support\Facades\Mail;
class InquiryController extends Controller
{
    //

    public function index(){


            $inquiries = Inquiries::All();
            return view('inquiries.index')->with('inquiries',$inquiries);



    }


    public function create(){



            return view('inquiries.create');

    }

    public function store(Request $request){


            $new_inquiry = new Inquiries();

            $new_inquiry->name  = $request->name;
            $new_inquiry->email = $request->email;
            $new_inquiry->course_name = $request->course_name;
            $new_inquiry->mobile = $request->mobile;


            $new_inquiry->save(); 

            $data = [

                'title'=>'New Inquiry',
                'student_name'=>$request->name,
                'course_name'=> $request->course_name,
          
              
    
            ];
    
  
  
              Mail::send('emails.inquiry',$data,function($message){
  
  
                $message->to('mithilesh.tarkar@gmail.com','Mithilesh')->subject('We have Received your Inquiry! Thank You!');
        
             });
  
             return redirect('admin/students/inquiry/index');



    }
}
