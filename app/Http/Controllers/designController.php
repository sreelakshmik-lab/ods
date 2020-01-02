<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\userReg;
use DB;

class designController extends Controller
{
    public function create_user(Request $request)
    {
       $user_exists = userReg::where('email', $request->input('email'))->first();
       if($user_exists===null){
       $user = new userReg();
       $user-> firstname = $request->input('firstname');
       $user-> lastname = $request->input('lastname');
       $user-> gender=$request->input('gender');
       $user-> phone = $request->input('phone');
       $user-> email = $request->input('email');
       $user-> password=$request->input('password');
       $user-> address = $request->input('address');
       $user-> status= '1';
       $user-> user_type = 'user';
       $user->save();
       if($user -> id > 0){
       	$response = [
       		"status" => 1,
       		"msg" =>"new user created"
       	];
       	return response()->json($response);
       }else{
       	$response = [
       		"status" => 0,
       		"msg" => "failed to create new user"
       	];
       	return response()->json($response);
       }
    }
    else{
    	$response = [
    		"status" =>0,
    	 	 "msg" => "Account already exists"
    	 	  ];
    	 	  return response()->json($response);
    }
}

	public function user_login(Request $request)
	{
		$user = userReg::where('email','=',$request->input('email'))->first();
		if($user === null)
		{
			$response = [
				"status" => 0,
			    "msg" => "No user exists"
			];
			return response($response);
		}
		else {
			if($user -> password === $request-> input('password')){
				$response =[
					"status" =>1,
					"userID" => $user-> id
				];
				return response($response);
		     }else
		     	{
				$response =[
					"status" => 0,
					"msg" => "Incorrect password"
				];
				return response($response);
		      	}

		      }


	}

	  public function create_designer(Request $request)
    {
       $designer_exists = userReg::where('email', $request->input('email'))->first();
       if($designer_exists===null){
       $designer = new userReg();
       $designer-> firstname = $request->input('firstname');
       $designer-> lastname = $request->input('lastname');
       $designer-> gender=$request->input('gender');
       $designer-> phone = $request->input('phone');
       $designer-> email = $request->input('email');
       $designer-> password=$request->input('password');
       $designer-> address = $request->input('address');
       $designer-> status= '1';
       $designer-> user_type = 'designer';
       $designer->save();
       if($designer -> id > 0){
       	$response = [
       		"status" => 1,
       		"msg" =>"new designer created"
       	];
       	return response()->json($response);
       }else{
       	$response = [
       		"status" => 0,
       		"msg" => "failed to create new designer"
       	];
       	return response()->json($response);
       }
    }
    else{
    	$response = [
    		"status" =>0,
    	 	 "msg" => "Account already exists"
    	 	  ];
    	 	  return response()->json($response);
    }
}

	public function designer_login(Request $request)
	{
		$designer = userReg::where('email',$request->input('email'))->first();
		if($designer === null)
		{
			$response = [
				"status" => 0,
			    "msg" => "No user exists"
			];
			return response($response);
		}
		else {
			if($designer -> password === $request-> input('password')){
				$response =[
					"status" =>1,
					"userID" => $designer-> id
				];
				return response($response);
		     }else
		     	{
				$response =[
					"status" => 0,
					"msg" => "Incorrect password"
				];
				return response($response);
		      	}

		      }


	}


	






}