<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class InvoicesController extends Controller
{
    //
    public function index(){


                return view('admin.invoices.index');


    }

    public function store(Request $request){


                // return $request;

                $pdf = PDF::loadView('welcome');
                return $pdf->download('welcome.pdf');

    }
}
