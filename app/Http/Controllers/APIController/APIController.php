<?php

namespace App\Http\Controllers\APIController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Students;

class APIController extends Controller

{
    //

    public function getAllStudents(){

            $all = Students::all();

            return response()->json($all);

    }
}
