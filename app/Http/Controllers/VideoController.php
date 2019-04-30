<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Caleg;
class VideoController extends Controller
{
    public function index()
    {
    	$data = Video::latest()->get();

    	return view('video.index',compact('data'));
    }

    public function form_validation($req)
    {
    	$this->validate($req,[
            'title'=>'required',
    		'url'=>'required',
    		'description'=>'required',
    	]);
    }

    public function store(Request $req)
    {
    	self::form_validation($req);

    	Video::create($req->all());
        $caleg = new Caleg();
        $caleg->sendNotif("Video Baru!",$req->title,"video");
    	return redirect()->route('video')->withMessage('Successfully added a Video');
    }

    public function delete($id)
    {
    	Video::destroy($id);

    	return back()->withMessage('Successfully deleted a Video');
    }

    public function edit($id)
    {
    	$data = Video::where('id',$id)->first();

    	return view('video.edit',compact('data'));
    }

    public function update(Request $req,$id)
    {
    	self::form_validation($req);

    	Video::where('id',$id)->update([
            'title'=>$req->title,
            'url'=>$req->url,
            'description'=>$req->description
        ]);

    	return redirect()->route('video')->withMessage('Successfully updated a Video');
    }

    public function preview($id)
    {
    	$data = Video::where('id',$id)->first();

    	return view('video.preview',compact('data'));
    }

    //Api Function

    public function data()
    {
        $array = [];
        $data = Video::latest()->get();
        foreach ($data as $field) {
            $day        = $field->created_at->format("D");
            $date_first = $field->created_at->format("d");
            $month      = $field->created_at->format("M");
            $year       = $field->created_at->format("Y");
            $time       = $field->created_at->format("H:i");
            array_push($array, [
                'id'=>$field->id,
                'title'=>$field->title,
                'description'=>$field->description,
                'url'=>$field->url,
                'created_at'=>$day.",".$date_first." ".$month." ".$year.",".$time." WIB",
            ]);
        }

        return ['data'=>$array];
    }
}
