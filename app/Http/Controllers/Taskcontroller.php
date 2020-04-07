<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;

class TaskController extends Controller
{

    public function index (){

       
       // $tasks =DB::table('tasks')->get(); 
       $tasks = Task::orderBy('created_at')->get();
        return view('tasks.index',compact('tasks'));
        
    }

    public function show ($id){

     //   $task =DB::table('tasks')->find($id);
     $tasks = Task:: where('id','=',$id)->get();
        return view ('tasks.show',compact('task'));
        
    }  

    public function store (Request $request){
        //  dd($request);
         /*DB::table('tasks')->insert([
             'name'=> $request->name,
             'created_at' => now(),
             'updated_at' =>now(),
         ]);*/
         $request->validate([
            'name'=>'required|min:10|max:255',
         ]);
         $task=new Task();
         $task-> name= $request->name;
         $task->save();
       
         return redirect()->back();
    } 

    public function destroy ($id){

      //  DB::table('tasks')->where('id','=',$id)->delete();

       $task=Task::find($id);
       $task->delete($id);
        return redirect('/');
        
    }

    public function ShowUpdateTask($id){
        $tasks = Task::all();
        $task_edit=Task::find($id);

        return view('tasks.update',compact('task_edit','tasks'));   
    }

    public function Update(Request $request,$id){ 

        // dd($request->name ,$id);
       // DB::table('tasks')->where('id', $id)->update(['name' => $request->name, 'created_at' => now(),'updated_at' =>now()]);
      
      $id = $request->id;
      $task = Task::find($request->id);
      $task->name = $request->name;
      if($task->name != null)
      {
          $task->save();
          return redirect('/');
      }

      return view('update', compact('id'));
    }
     //  return redirect('/'); 
}