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
        $validatedData = $this->validateData();
        
        if (request('image')) {
            $validatedData['image'] = request('image')->store('images');
        }
        
        Task::create($validatedData);
        
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
        $validatedData = $this->validateData();
        
        if (request('image')) {
            $validatedData['image'] = request('image')->store('images');
        }
        
        $task->update($validatedData);
        
        return redirect()->route('show', [$task]);
    }
    
    public function destroy(Task $task)
    {
        $task->deleteStoredImage();
        $task->delete();
        
        return redirect()->route('index');
    }
    
    public function mark(Task $task)
    {
        $task->toggleCompleted();
        $task->save();
        
        return redirect()->back();
    }
    
    public function removeImage(Task $task)
    {
        $task->deleteStoredImage();
        $task->image = null;
        $task->save();
        
        return redirect()->back();
    }
    
    public function validateData()
    {
        return request()->validate([
            'description' => ['required', 'string', 'max:100'],
            'image' => ['image']
        ]);
    }
}
