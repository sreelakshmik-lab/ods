<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Designerprofile;
use DB;

class DesignerprofileController extends Controller
{
    public function designer_profile(Request $request)
    {
    	$designerprofile_exists = Designerprofile::where('designerid', $request->input('designerid'))->first();
    	if($designerprofile_exists===null)
    	{
    	$designerprofile = new Designerprofile();
    	$designerprofile-> designerid = $request->input('designerid');
    	$designerprofile-> edu_quali = $request->input('edu_quali');
    	$designerprofile-> work_exp = $request->input('work_exp');
    	$designerprofile-> save();

    
    	if($designerprofile -> id > 0){
       	$response = [
       		"status" => 1,
       		"msg" =>"designerprofile"
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
   	   
   	    else{
    	$response = [
    		"status" =>0,
    	 	 "msg" => "Already added"
    	 	  ];
    	 	  return response()->json($response);
            }
   		
   	}
}
