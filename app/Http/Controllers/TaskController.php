<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    public function index(){
        return view('task.index',[
            'tasks' => Task::all()
        ]);
    }

    public function create(Request $request){
        $this->validate($request, [
            'title' => 'required|min:2',
        ]);
        $user = Auth::user();

        $task = new Task([
            'title' => $request->input('title')
        ]);
        $user->tasks()->save($task);
        return redirect()->back()->with([
			'info'=>'Successfully CREATED !'
		]);
    }
    public function edit($id,Request $request){
        $task = Task::find($id);
        if($request->input('title')!== null){
            $task->title = $request->input('title');
            $task->save();
            return redirect()->route('taskIndex')->with([
                'info'=>'Successfully EDITED !'
            ]);
        }
        return view('task.edit',[
            'task' => $task
        ]);
    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back()->with([
			'info'=>'Successfully DELETED !'
		]);
    }
}