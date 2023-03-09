<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("users.index",[
            "users"=> User::all(),
            "tasks"=> Task::all()

        ]);
    }
    public function addTask($id, Request $request){
        $user=User::find($id);
        $task=Task::find($request->task_id);
        $user->tasks()->attach($request->task_id);
        $user->save();
        return redirect()->route("users.index");
    }
}
