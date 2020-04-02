<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\DB;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index() {
     

      $tasks = DB::table('tasks')->get();
      
      return view('tasks.index', compact('tasks'));
    }

    public function show($id) {
     

      $task = DB::table('tasks')->find($id);
      
      return view('tasks.show', compact('task'));
    }

    public function store(Request $request) {

      $task = new Task;

      $task->name = $request->name;

      $task->save();

      return redirect()->back();
    }
    public function destroy(Request $request) {

      $task = Task::findOrFail($request->id);
      $task->delete();

      return redirect()->back();
    }

    public function update(Request $request) {
        $id = $request->id;
        $task = Task::find($request->id);
        $task->name = $request->name;
        if($task->name != null)
        {
            $task->save();
            return redirect('/');
        }



        return view('/update', compact('id'));


       // return redirect()->back();
    }
}
