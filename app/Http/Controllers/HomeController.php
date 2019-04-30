<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caleg;
use App\Career as CR;
use App\Organization as ORG;
use App\Activities as AC;
use App\Message as MS;
use App\Video as V;
use App\Members as M;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $caleg  = Caleg::count();
        $career = CR::count();
        $org    = ORG::count();
        $act    = AC::count();
        $mess   = MS::count();
        $vid    = V::count();
        $mem    = M::count();
        return view('layouts.dashboard',compact(
            'caleg',
            'career',
            'org',
            'act',
            'mess',
            'vid',
            'mem'
        ));
    }
}
