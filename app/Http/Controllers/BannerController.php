<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{
    public function index()
    {
    	$data = Banner::latest()->get();

    	return view('banner.index',compact('data'));
    }

    public function store(Request $req)
    {
    	
    	$this->validate($req,[
    		'photo'=>'required|image',
    	]);

    	if ($req->hasFile('photo')) {
    		$photo = $req->file('photo');
    		$name  = uniqid().".".$photo->getClientOriginalExtension();

    		$sending = Banner::create(['photo'=>$name]);
    		if ($sending) {
    			$photo->move(public_path('images/banner'),$name);
    			return redirect()->route('banner')->withMessage('Successfully Added a Banner');
    		}

    	}
    }

    public function delete($id)
    {
    	$obj = Banner::where('id',$id);

    	$data = $obj->first();
    	unlink(public_path('images/banner/'.$data->photo));
    	$obj->delete();

    	return back()->withMessage('Successfully deleted a Banner');
    }


    public function data()
    {
    	return ['data'=>Banner::latest()->get()];
    }
}
