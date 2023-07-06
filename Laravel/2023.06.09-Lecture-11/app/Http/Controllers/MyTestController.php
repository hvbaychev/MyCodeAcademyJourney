<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MyValidationRequest;
use App\Mail\TestEmail;

class MyTestController extends Controller
{
    
    public function index()
    {
        // dd("sadasda");
        return view('home');
    }

    public function send( MyValidationRequest $request)
    {
        
        $data = ['message' => 'This is a test!'];
        $from_name = $request->name;
        $from_phone = $request->phone;
        $to_email = $request->email;
        $text = $request->message;
        $data = "This email is send by " . $from_name . "\n";
        $data .= "with contact phone : " . $from_phone . "\n";
        $data .= "Message : \n" . $text;

        // dd($to_email);
        $result = Mail::to($to_email)->send(new TestEmail($data));

        if ( $result ) {
            return view('home')->with('success','You have registered successfully');;
        } else {
            return view('home')->with('fail', 'Something wrong');
        }
    }
}
