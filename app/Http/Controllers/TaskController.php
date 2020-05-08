<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

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
       Task::create([
           'title'=>$request->task
       ]);
       session()->flash('msg','Task has been Created');
       return redirect('/');

    }
}
