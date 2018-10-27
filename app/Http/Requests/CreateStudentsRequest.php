<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {

        \Log::info($request);
       // dd(print_r(($request->all())));

       
        return [
            'name'         => 'required',
            'course_name'  => 'required',
            'student_email' => 'required|email',
            'student_mobile' => 'required|max:11',
            'address'=> 'required'
           
        ];

        
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'name.required' => 'Firstname is mandatory',
            'course_name.required' => 'Course Name is Required',
            'student_email.required' => 'Student Email is Required',
            'address.required' => 'Address  is Required'
        ];

    }
}
