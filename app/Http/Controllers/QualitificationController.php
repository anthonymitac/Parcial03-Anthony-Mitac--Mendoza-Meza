<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualitification;
use App\Professional;

class QualitificationController extends Controller
{
    //
    function index(){
        $qualitification=Qualitification::all();
        return view('qualitification.index',['qualitification'=>$qualitification->toArray()]);
        
    }
    
    function create(){
        return view('qualitification.create');
    }
    function store(Request $request){
        dd($request);
        $this->validate($request, [
            'month' => 'required|min:1',
            'point' => 'required|min:5',
            'descryption'=>'required|min:10',
            'id'=>'required|min:1',

        ]);
        Qualitification::create($request->all());
        return redirect('/qualitification');
    }
    function show($id){
        //dd($codeLessor);
        $profession=Professional::find($id);
        //dd($lessor);
        return view('qualitification.show',compact('profession'));
    }


}
