<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dues;
class DuesController extends Controller
{
    //

    public function index(){


            $dues = Dues::all();


            return view('dues.index')->with('dues',$dues);

    }

    public function create(){


            return view('dues.add');


    }

    public function store(Request $request){


            $new = new Dues();

            $new->student_name = $request->student_name;

            $new->save();

            return redirect('admin/dues/all');

    }

    public function delete($id){


            $dues = Dues::find($id);

            $dues->delete();
            return redirect('admin/dues/all');


    }
}
