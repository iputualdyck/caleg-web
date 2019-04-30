<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caleg;
class CalegController extends Controller
{
    public function index()
    {
    	$count = Caleg::count();

    	if ($count > 0) {
    		$data = Caleg::latest()->first();	
    		return view('caleg.index',compact('data'));
    	}else{
    		return redirect()->route('caleg.add');
    	}
    }

    public function store(Request $req)
    {
    	$this->validate($req,[
            'name'          =>'required',
            'place_of_birth'=>'required',
            'date_of_birth' =>'required|date',
            'religion'      =>'required',
            'address'       =>'required',
            'phone'         =>'required|numeric',
            'partai'        =>'required',
            'about'         =>'required',
            'education'     =>'required',
            'principle'     =>'required',
            'photo'         =>'required|image|mimes:png,jpg,jpeg',
        ]);

        $count = Caleg::count();

        if ($count > 0) {
            return redirect()->route('caleg');
        }else{

            if ($req->hasFile('photo')) {
                $photo = $req->file('photo');
                $name  = uniqid().".".$photo->getClientOriginalExtension();

                $sending = Caleg::create([
                    'name'          =>$req->name,
                    'place_of_birth'=>$req->place_of_birth,
                    'date_of_birth' =>$req->date_of_birth,
                    'religion'      =>$req->religion,
                    'address'       =>$req->address,
                    'phone'         =>$req->phone,
                    'partai'        =>$req->partai,
                    'about'         =>$req->about,
                    'education'     =>$req->education,
                    'principle'     =>$req->principle,
                    'photo'         =>$name,
                    'email'         =>$req->email,
                    'facebook'      =>$req->facebook,
                    'instagram'     =>$req->instagram,
                ]);

                if ($sending) {
                    $photo->move(public_path('images/caleg/'),$name);
                }

                return redirect()->route('caleg')->withMessage('Successfully added a Caleg');

            }else{
                return "ok";
            }

        }
    }

    public function edit($id)
    {
        $data = Caleg::where('id',$id)->first();

        return view('caleg.edit',compact('data'));
    }

    public function update(Request $req,$id)
    {
        $this->validate($req,[
            'name'          =>'required',
            'place_of_birth'=>'required',
            'date_of_birth' =>'required|date',
            'religion'      =>'required',
            'address'       =>'required',
            'phone'         =>'required|numeric',
            'partai'        =>'required',
            'about'         =>'required',
            'education'     =>'required',
            'principle'     =>'required',
        ]);

        if ($req->hasFile('photo')) {
            $photo = $req->file('photo');
            $name  = uniqid().".".$photo->getClientOriginalExtension();

            $sending = Caleg::where('id',$id)->update([
                'name'          =>$req->name,
                'place_of_birth'=>$req->place_of_birth,
                'date_of_birth' =>$req->date_of_birth,
                'religion'      =>$req->religion,
                'address'       =>$req->address,
                'phone'         =>$req->phone,
                'partai'        =>$req->partai,
                'about'         =>$req->about,
                'education'     =>$req->education,
                'principle'     =>$req->principle,
                'photo'         =>$name,
                'email'         =>$req->email,
                'facebook'      =>$req->facebook,
                'instagram'     =>$req->instagram,
            ]);

            if ($sending) {
                $photo->move(public_path('images/caleg/'),$name);
            }


        }else{
            $sending = Caleg::where('id',$id)->update([
                'name'          =>$req->name,
                'place_of_birth'=>$req->place_of_birth,
                'date_of_birth' =>$req->date_of_birth,
                'religion'      =>$req->religion,
                'address'       =>$req->address,
                'phone'         =>$req->phone,
                'partai'        =>$req->partai,
                'about'         =>$req->about,
                'education'     =>$req->education,
                'principle'     =>$req->principle,
                'email'         =>$req->email,
                'facebook'      =>$req->facebook,
                'instagram'     =>$req->instagram,
            ]);
        }

        return redirect()->route('caleg')->withMessage('Successfully updated a Caleg');
    }

    public function data()
    {
        return Caleg::latest()->first();
    }
}
