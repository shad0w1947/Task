<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    function index(){
        $task = Task::all();
        return view('task.index',compact('task'));
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
    function destroy($id){
        // dd($id);
        Task::destroy($id);
        return redirect('/')->with('msg',"Task has been Deleted");
    }
}
