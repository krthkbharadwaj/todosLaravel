<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllTodos()
    {
        return Task::all(); 
    }
    public function createTodos(Request $request)
    {
        $todos = new Task;
        
        $todos->name = $request->name;
        $todos->status = $request->status;
        $todos->save(); 
    }
    public function getTodo(Request $request,$tid)
    {
        return Task::find($tid);
    }
    public function updateTodo(Request $request,$tid)
    {
       $todos = Task::firstOrCreate(['id'=>$tid,'name'=>$request->name,'status'=>$request->status]);
       $todos->save(); 
    }
    public function deleteTodo($tid)
    {
       Task::find($tid)->delete();
       return "Success"; 
    } 
}
