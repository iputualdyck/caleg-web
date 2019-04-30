<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
usE App\Members;
use Hash;
class MembersController extends Controller
{
    public function index()
    {
    	$data = Members::latest()->get();

    	return view('members.index',compact('data'));
    }

    public function login(Request $request)
    {
    	$obj = Members::where('email',$request->email);
    	if ($obj->count() > 0) {
    		$data = $obj->first();
    		return [
    			'status'=>'available',
    			'data'=>[
    				'id'    =>$data->id,
    				'email' =>$data->email,
    				'name'  =>$data->name,
    			],
    		];
    	}else{
    		$id = Members::create([
    			'email'=>$request->email,
    			'name' =>$request->name,
    			'password'=>Hash::make($request->password),
    		])->id;

    		return [
    			'status'=>'success',
    			'data'=>[
    				'id'    =>$id,
    				'email' =>$request->email,
    				'name'  =>$request->name,
    			],
    		];
    	}
    }
}
