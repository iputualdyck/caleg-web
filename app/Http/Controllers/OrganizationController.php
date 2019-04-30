<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
class OrganizationController extends Controller
{
    public function index()
    {
    	$data = Organization::latest()->get();

    	return view('organization.index',compact('data'));
    }

    public function form_validation($req)
    {
    	$this->validate($req,[
    		'organization_description'=>'required',
    		'date_start'=>'required|numeric',
    		'date_end'  =>'required',
    	]);
    }

    public function store(Request $req)
    {
    	self::form_validation($req);

    	Organization::create($req->all());

    	return redirect('organization')->withMessage('Successfully Added New Organization');
    }

    public function edit($id)
    {
    	$data = Organization::where('id',$id)->first();

    	return view('organization.edit',compact('data'));
    }

    public function update(Request $req,$id)
    {
    	self::form_validation($req);

    	Organization::where('id',$id)->update([
    		'organization_description'=>$req->organization_description,
    		'date_start'=>$req->date_start,
    		'date_end'  =>$req->date_end,
    	]);

    	return redirect('organization')->withMessage('Successfully Updated an Organization');
    }

    public function delete($id)
    {
    	Organization::destroy($id);

    	return back()->withMessage('Success Deleted an Organization');
    }

    //Api Function

    public function data()
    {
        return ['data'=>Organization::latest()->get()];
    }
}
