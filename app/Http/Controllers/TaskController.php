<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
        return view('tasks.index', ['tasks' => $tasks]);
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
    
    public function edit()
    {
        return view('tasks.edit');
    }
    
    public function update()
    {
        //
    }
    
    public function destroy()
    {
        //
    }
    
    public function check()
    {
        //
    }
}
