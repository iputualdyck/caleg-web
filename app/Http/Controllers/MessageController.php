<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Members;
class MessageController extends Controller
{
    public function index()
    {
    	$data = [];
    	$message = Message::latest()->get();
    	foreach ($message as $field) {
    		$member = Members::where('id',$field->member_id)->first();
    		$array = [
    			'id'        =>$field->id,
    			'name'      =>$member->name,
    			'message'   =>$field->message,
    			'created_at'=>$field->created_at,
    		];

    		$data[] = $array;
    	}

    	return view('message.index',compact('data'));
    }

    public function detail($id)
    {
    	$data = [];
    	$message = Message::where('id',$id)->get();
    	foreach ($message as $field) {
    		$member = Members::where('id',$field->member_id)->first();
    		$array = [
    			'id'        =>$field->id,
    			'name'      =>$member->name,
    			'email'     =>$member->email,
    			'message'   =>$field->message,
    			'created_at'=>$field->created_at,
    		];

    		$data = $array;
    	}

    	return view('message.detail',compact('data'));
    }


    public function add(Request $req)
    {
        Message::create($req->all());
        return ['status'=>'ok'];
    }
}
