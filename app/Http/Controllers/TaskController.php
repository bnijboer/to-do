<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }
    
    public function create()
    {
        return view('tasks.create');
    }
    
    public function store()
    {
        //
    }
    
    public function show()
    {
        return view('tasks.show');
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
