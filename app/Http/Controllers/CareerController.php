<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
class CareerController extends Controller
{
    public function index()
    {
    	$data = Career::latest()->get();

    	return view('career.index',compact('data'));
    }

    public function form_validation($req)
    {
    	$this->validate($req,[
    		'career_description'=>'required',
    		'date_start'=>'required|numeric',
    		'date_end'  =>'required',
    	]);
    }

    public function store(Request $req)
    {
    	self::form_validation($req);

    	Career::create($req->all());

    	return redirect('career')->withMessage('Successfully Added New Career');
    }

    public function delete($id)
    {
    	Career::destroy($id);

    	return back()->withMessage('Success Deleted a Career');
    }

    public function edit($id)
    {
    	$data = Career::where('id',$id)->first();

    	return view('career.edit',compact('data'));
    }

    public function update(Request $req,$id)
    {
    	self::form_validation($req);

    	Career::where('id',$id)->update([
    		'career_description'=>$req->career_description,
    		'date_start'=>$req->date_start,
    		'date_end'  =>$req->date_end,
    	]);

    	return redirect('career')->withMessage('Successfully Updated a Career');
    }

    //Api Function

    public function data()
    {
        $data['data'] = Career::all();


        return $data;
    }
}
