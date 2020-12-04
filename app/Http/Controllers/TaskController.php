<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);
    }
    
    public function create()
    {
        return view('tasks.create');
    }
    
    public function store()
    {
        $validated = $this->validateData();
        
        Task::create([
            'description'   => $validated['description'],
            'image'         => empty($validated['image']) ? null : $validated['image']->store('images')
        ]);
        
        return redirect()->route('index');
    }
    
    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }
    
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }
    
    public function update(Task $task)
    {
        $validated = $this->validateData();
        
        $task->update([
            'description'   => $validated['description'],
            'image'         => empty($validated['image']) ? null : $validated['image']->store('images')
        ]);
        
        return redirect()->route('show', [$task]);
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
        
        return redirect()->route('index');
    }
    
    public function mark(Task $task)
    {
        $task->toggleCompleted();
        $task->save();
        
        return redirect()->back();
    }
    
    public function validateData()
    {
        return request()->validate([
            'description' => ['required', 'max:100'],
            'image' => ['image']
        ]);
    }
}
