<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function index(){


            return view('admin.emails.dashboard');

    }

    public function sendEmail(Request $request){


        $from_email = $request->email_id;
        $subject = $request->subject;
        $email_body = $request->summernoteInput;
       // return $from_email;

       Mail::send([], [], function($message) use ($from_email,$subject,$email_body){
            
        $message->to($from_email)->subject($subject)->setBody($email_body,'text/html');


    });

    return back()->with('Status','Email Sent');


    }
    public function inquiryEmail(){







    }

    public function newAdmissionEmail(){




    }

    public function onlineAttendanceEmail(){




    }

    public function feesEmail(){





        
    }
}
