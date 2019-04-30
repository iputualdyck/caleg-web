<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery as GR;
use App\Caleg;
class GalleryController extends Controller
{
    public function index()
    {
    	$data = GR::latest()->get();
    	return view('gallery.index',compact('data'));
    }

    public function store(Request $req)
    {
    	$this->validate($req,[
    		'description'=>'required',
    		'photo'      =>'required|image',
    	]);

    	if ($req->hasFile('photo')) {
    		$photo = $req->file('photo');
    		$name  = uniqid().".".$photo->getClientOriginalExtension();

    		$sending = GR::create([
    			'description'=>$req->description,
    			'photo'      =>$name,
    		]);

    		if ($sending) {
    			$photo->move(public_path('images/gallery'),$name);
                $caleg = new Caleg();
                $caleg->sendNotif("Photo Baru!",$req->description,"gallery");
    		}

    		return redirect()->route('gallery')->withMessage('Successfully Added an Image');

    	}
    }

    public function delete($id)
    {
    	$obj = GR::where('id',$id);

    	$data = $obj->first();
    	unlink(public_path('images/gallery/'.$data->photo));
    	$obj->delete();

    	return back()->withMessage('Successfully Deleted an Image');
    }

    public function edit($id)
    {
    	$data = GR::where('id',$id)->first();

    	return view('gallery.edit',compact('data'));
    }

    public function update(Request $req,$id)
    {
    	$this->validate($req,[
    		'description'=>'required',
    		'photo'      =>'image',
    	]);

    	if ($req->hasFile('photo')) {
    		$photo = $req->file('photo');
    		$name  = uniqid().".".$photo->getClientOriginalExtension();

    		$sending = GR::where('id',$id)->update([
    			'description'=>$req->description,
    			'photo'      =>$name,
    		]);

    		if ($sending) {
    			$photo->move(public_path('images/gallery'),$name);
    		}

    	}else{
    		$sending = GR::where('id',$id)->update([
    			'description'=>$req->description,
    		]);
    	}

    	return redirect()->route('gallery')->withMessage('Successfully Updated an Image');
    }

    public function data()
    {
        $array = [];
        $data = GR::latest()->get();
        foreach ($data as $field) {
            $day        = $field->created_at->format("D");
            $date_first = $field->created_at->format("d");
            $month      = $field->created_at->format("M");
            $year       = $field->created_at->format("Y");
            $time       = $field->created_at->format("H:i");
            array_push($array, [
                'id'=>$field->id,
                'photo'=>$field->photo,
                'description'=>$field->description,
                'created_at'=>$day.",".$date_first." ".$month." ".$year.",".$time." WIB",
            ]);
        }

        return ['data'=>$array];
    }
}
