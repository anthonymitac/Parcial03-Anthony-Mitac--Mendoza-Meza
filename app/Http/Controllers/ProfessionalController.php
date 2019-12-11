<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;

class ProfessionalController extends Controller
{
    //LISTAR TODOS LOS LESSOR
    function index(){
        $professional=Professional::all();
        return view('profession.index',['professional'=>$professional->toArray()]);
        
    }
    
    function create(){
        return view('profession.create');
    }
    function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:5',
            'dni' => 'required|min:8',
            'profession' => 'required|min:5',
        ]);
        Professional::create($request->all());
        return redirect('/professional');
    }
    function show($id){
        
        $profession=Professional::find($id);
        
        return view('profession.show',compact('profession'));
    }

    
    function showlocalsoflessor($id){
        //dd($id);
        $lessor=Lessor::find($id)->locals;
        //dd($lessor);
        return view('lessor.localsoflessor',compact('lessor'));
    }
}
