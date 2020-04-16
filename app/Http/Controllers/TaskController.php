<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Routing\Route;

class TaskController extends Controller
{
    public function index(){
        return view('task.index',[
            'tasks' => Task::all()
        ]);
    }

    public function create(Request $request){
        $task = new Task([
            'title' => $request->input('title')
        ]);
        $task->save();
        return redirect()->back();
    }
    public function edit($id,Request $request){
        $task = Task::find($id);
        if($request->input('title')!== null){
            $task->title = $request->input('title');
            $task->save();
            return redirect()->route('taskIndex');
        }
        return view('task.edit',[
            'task' => $task
        ]);
    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }
}
