<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use App\Students;
use Illuminate\Support\Facades\Mail;


class CreateAdmissionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

     public $admission_data;
    public function __construct($admission_data)
    {
        //
        $this->admission_data = $admission_data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        //
        $admission_data = $this->admission_data;


       $student_email =  $admission_data['student_email'];

        \Log::info($admission_data);
        $new = new Students();
       // dd(print_r($admission_data['name']));
        $new->name = $admission_data['name'];
        $new->course_name = $admission_data['course_name'];
        $new->student_email = $admission_data['student_email'];
        $new->parent_email = $admission_data['parent_email'];
        $new->student_mobile = $admission_data['student_mobile'];
        $new->parent_mobile = $admission_data['parent_mobile'];
        $new->address = $admission_data['address'];

        $new->save();


        $data = [

            'title'=>'New Admission Done',
            'name'=>$admission_data['name'],
            'email'=>$admission_data['student_email'],
            'mobile'=>$admission_data['student_mobile'],
          

        ];

        //  Mail::send('emails.template',$data,function($message){


    //     $message->to('ashikshibili@gmail.com','Ashik')->subject('Hello From Team');

    //  });

    // Mail::send([], [], function($message) use ($from_email,$subject,$email_body){
            
    //     $message->to($from_email)->subject($subject)->setBody($email_body,'text/html');


    // });


     Mail::send('emails.action',$data,function($message) use($student_email){


        $message->to($student_email)
                ->cc('mithilesh.tarkar@gmail.com')
                ->subject('Hello From Team');

     });




      //  dd(print_r($admission_data));
    }
}
