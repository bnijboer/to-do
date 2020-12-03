<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::all()]);
    }
    
    public function create()
    {
        return view('tasks.create');
    }
    
    public function store()
    {
        //
    }
    
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }
    
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }
    
    public function update()
    {
        //
    }
    
    public function destroy()
    {
        //
    }
    
    public function check(Task $task)
    {
        $task->toggleCompleted();
        $task->save();
        
        return redirect()->back();
    }
}
