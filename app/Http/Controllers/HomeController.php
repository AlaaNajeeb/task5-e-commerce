<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tableCounts=[];
        $tables=['users','orders','products','categories'];
        foreach($tables as $table){
            $count=DB::table($table)->count();
            $tableCounts[$table]= $count;
        }
        return view('home',compact('tableCounts'));
    }
    
}
