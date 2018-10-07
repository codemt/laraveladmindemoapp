<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
class FeesController extends Controller
{
    //
    public function index(){



            return view('students.fees');

            // $fees = Fees::All();
            // return view('fees.index')->with('fees',$fees);

    }
}
