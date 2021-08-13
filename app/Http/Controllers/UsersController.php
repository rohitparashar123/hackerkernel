<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Redirect;
use Response;
use Mail;
use Validator;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function index()
    {
    return view('form.form');
    }

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        
        $request->validate([   
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'mobile'=>' required|min:10|max:10|unique:users',
        ]);


         $data = array(
          'name_data'  => $request->name,
          'email_data' => $request->email,
          'mobile_data' => $request->mobile
          
         );

         Mail::send('form.mail', $data, function($message) use ($request){
          $message->to($request->email, 'testmail')->subject('New Enquiry received ' . $request->name);
          $message->from($request->email, $request->name);
         });

         users::create($request->all());

         return redirect('/display-form')->with('success', 'Verfication email has been added');
        
    }


    public function show()
    {
        $data = users::paginate(3);
        return view('form.view-form',compact('data'));
    }
}
