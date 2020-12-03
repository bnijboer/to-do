@extends('layouts.app')

@section('content')

    <h1>Task</h1>
    
    <p>
        <strong>Description: </strong> {{ $task->description }}
        </p>
    <p>   
        <strong>Image: </strong> {{ $task->image }}
    </p>
    <p>
        <strong>Created At: </strong> {{ $task->created_at }} 
    </p>
    <p>   
        <strong>Completed: </strong> {{ $task->completed ? 'yes' : 'no' }}
    </p>
    <p>
        <a href="/{{ $task->id }}/edit">Edit Task</a>
    </p>

@endsection