<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestServiceController extends Controller
{
    //index
    public function index()         
    {   
        return view('test_service.index');
    }


    public function submit_test(Request $request)
    {
        return response()->json(['success' => 'Success'],200);
    }
}
