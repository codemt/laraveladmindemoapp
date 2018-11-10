<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use Barryvdh\DomPDF\Facade as PDF;
class InvoicesController extends Controller
{
    //
    public function index(){


                return view('admin.invoices.index');


    }

    public function store(Request $request){


                // return $request;

               $student_name = $request->student_name;

                $get_fee_detail = Fees::where('name',$student_name)->where('is_latest',true)->get()->toArray();


                foreach($get_fee_detail as $value){



                            $student_name = $value['name'];
                            $course_name = $value['course_name'];
                            $fee_amount = $value['fee_amount'];
                            $valid_till  = $value['valid_till']; 


                }


                $data = [


                        'title'=>'Fees Detail',
                        'student_name'=>$student_name,
                        'course_name'=>$course_name,
                        'fee_amount'=>$fee_amount,
                        'valid_till'=>$valid_till


                ];

                $pdf = PDF::loadView('emails.billingpdf',$data);
                return $pdf->download('receipt.pdf');





                //return $get_fee_detail;


               //return $student_name;
                

    }
}
