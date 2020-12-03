@extends('layouts.app')

@section('content')

    <h1>Task</h1>
    
    <p>
        <strong>Description:</strong>
        
        {{ $task->description }}
    </p>
    <p>   
        <strong>Image:</strong>
        
        @if (!empty($task->image)) 
            {{ $task->image }}
        @else
            none
        @endif
    </p>
    <p>
        <strong>Created at:</strong>
        
        {{ $task->created_at }} 
    </p>
    <p>   
        <strong>Completed:</strong>
        
        {{ $task->completed ? 'yes' : 'no' }}
        
        (<a href="/{{ $task->id }}/mark">toggle</a>)
    </p>
    <p>
        <a href="/{{ $task->id }}/edit">
            Edit
        </a>
        <form action="/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit">
                Delete
            </button>
        </form>
    </p>

@endsection