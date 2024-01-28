<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SendSmsController extends Controller{
//========================Start=========================//


public function index(Request $request){

    return view('welcome');

}

public function MessageSend(Request $request){


      // Validate the incoming request data
        // $validator = Validator::make($request->all(), [
        //     'mobile' => 'required|string|regex:/^\d{10}$/',
        //     'meassage' => 'required',
           
        // ]);

        // // If validation fails, return validation errors to the user
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

    $sid    = env('TWILIO_SID');
    $token  = env('TWILIO_TOKEN'); 
    $number  = env('TWILIO_NUMBER'); 
    $twilio = new Client($sid, $token);
    $mobile = "+91".$request->mobile; //"+917869677560";//
    $messages = $request->message; //"Hello I Am Kameshwar"; 

    //print_r($sid);die();
    $message = $twilio->messages->create($mobile, 
                                array(
                                "from" => $number,
                                "body" => $messages
                                )
      );



       print($message->sid);die();
}


//========================/End=========================//    
}
