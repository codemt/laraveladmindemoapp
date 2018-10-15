<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiries;
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
            //  return $new_inquiry;



    }
}
