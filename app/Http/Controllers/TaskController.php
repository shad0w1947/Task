<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    function index(){
        return view('task.index');
    }
    function store(Request $request){
        $request->validate([
            'task'=>'required',
        ]);
       dd($request->all());

    }
}