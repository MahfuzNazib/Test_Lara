<?php

namespace App\Http\Controllers;

use App\Models\TestService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TestServiceController extends Controller
{
    //index
    public function index()
    {
        return view('test_service.index');
    }


    public function submit_test(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|unique:test_services,email",
            "amount" => "required"
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        else
        {
            try{

                $test_service = new TestService();

                $test_service->name = $request->name;
                $test_service->email = $request->email;
                $test_service->amount = $request->amount;

                $email = $request->email;

                if($test_service->save()) {
                    Mail::send('emails.testServiceMail', ['test_service' => $test_service], function($message) use ($email){
                        $message->from('test@nazibmahfuz.com');
                        $message->to($email);
                        $message->subject('Payment Successfull');
                    });
                    return response()->json(['success' => 'Successfully Submitted'], 200);
                } else {
                    return response()->json(['warning' => 'Some Wrong!'], 422);
                }

            } catch(Exception $e) {
                return response()->json(['error' => $e->getMessage()], 200);
            }
        }

        return response()->json(['success' => 'Success'],200);
    }
}
