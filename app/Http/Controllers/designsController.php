<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\designs;
use DB;

class designsController extends Controller
{
    public function designupload(Request $request)
 {
 	
    	
    	$designs = new designs();
    	$designs-> fk_designerid= $request->input('fk_designerid'); 
    	$designs-> design_type = $request->input('design_type');
    	// $designs-> designs = $request->input('designs');
    	

    	
 	
 	if($request->hasFile('designs'))
 	{
 		$file=$request->file('designs');
 		$extension= time(). '.' .$file->getClientOriginalExtension();
 		$destinationpath=public_path('/designs');
 		$file->move($destinationpath, $extension);
 		$designs->designs=$extension;
 		
 	}
 	else 
 	{
 		$designs->designs='';
 	}
 	$designs->save();


 	if($designs -> id > 0){
       	$response = [
       		"status" => 1,
       		"msg" =>"designs"
       	];
       	return response()->json($response);
       }else{
       	$response = [
       		"status" => 0,
       		"msg" => "failed to load"
       	];
       	return response()->json($response);
       }
        

 	
 	// return response()->json($response);
 
 }
}
