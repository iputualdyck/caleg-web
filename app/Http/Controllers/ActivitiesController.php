<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities as Ac;
use App\Caleg;
class ActivitiesController extends Controller
{
    public function index()
    {
    	$data = Ac::latest()->get();

    	return view('activities.index',compact('data'));
    }

    public function store(Request $req)
    {
    	$this->validate($req,[
    		'title'=>'required',
    		'full_content'=>'required',
    		'cover_image'=>'required|image',
    	]);


    	if ($req->hasFile('cover_image')) {
    		$image = $req->file('cover_image');
    		$name  = uniqid().".".$image->getClientOriginalExtension();

    		$sending = Ac::create([
    			'title'       =>$req->title,
    			'cover_image' =>$name,
    			'full_content'=>$req->full_content,
    		]);
    		if ($sending) {
    			$move  = $image->move(public_path('images/activity'),$name);
                $caleg = new Caleg();
                $caleg->sendNotif("Aktivitas Baru!",$req->title,"activity");
    			return redirect()->route('activities')->withMessage('Successfully added new Activity');
    		}
    	}
    }

    public function detail($id)
    {
    	$data = Ac::where('id',$id)->first();

    	return view('activities.detail',compact('data'));
    }

    public function delete($id)
    {
    	$obj = Ac::where('id',$id);

    	$data = $obj->first();
    	unlink(public_path('images/activity/'.$data->cover_image));
    	$obj->delete();

    	return back()->withMessage('Successfully deleted an Activity');
    }

    public function edit($id)
    {
    	$data = Ac::where('id',$id)->first();

    	return view('activities.edit',compact('data'));
    }

    public function update(Request $req,$id)
    {
    	$this->validate($req,[
    		'title'=>'required',
    		'full_content'=>'required',
    		'cover_image'=>'image',
    	]);

    	if ($req->hasFile('cover_image')) {
    		$image = $req->file('cover_image');
    		$name  = uniqid().".".$image->getClientOriginalExtension();

    		$sending = Ac::where('id',$id)->update([
    			'title'       =>$req->title,
    			'cover_image' =>$name,
    			'full_content'=>$req->full_content,
    		]);
    		if ($sending) {
    			$move  = $image->move(public_path('images/activity'),$name);
    		}
    	}else{
    		$sending = Ac::where('id',$id)->update([
    			'title'       =>$req->title,
    			'full_content'=>$req->full_content,
    		]);
    	}

    	return redirect()->route('activities')->withMessage('Successfully Updated an Activity');
    }


    //Api Function
    public function data()
    {
        $array = [];
        $data = Ac::latest()->get();
        foreach ($data as $field) {
            $day        = $field->created_at->format("D");
            $date_first = $field->created_at->format("d");
            $month      = $field->created_at->format("M");
            $year       = $field->created_at->format("Y");
            $time       = $field->created_at->format("H:i");
            array_push($array, [
                'id'=>$field->id,
                'title'=>$field->title,
                'main_content'=>$field->full_content,
                'cover_image'=>$field->cover_image,
                'created_at'=>$day.",".$date_first." ".$month." ".$year.",".$time." WIB",
            ]);
        }

        return ['data'=>$array];
    }
}





