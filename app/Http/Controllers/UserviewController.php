<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userview;
use DB;

class UserviewController extends Controller
{
	// public function designer()
	// {
		// return response()->json(userreg::get('firstname'));
	// }
	public function userview(Request $request)
	{

    $userview = new userview();
    $userview-> des_fk= $request->input('des_fk'); 
    $userview-> rate = $request->input('Rate');
    $userview-> details = $request->input('Details');
    $userview-> save();

    if($userview -> id > 0){
       	$response = [
       		"status" => 1,
       		"msg" =>"details"
       	];
       	return response()->json($response);
       }
       else{
       	$response = [
       		"status" => 0,
       		"msg" => "failed"
       	];
       	return response()->json($response);
       }
       }
   	   
   	    

	}

