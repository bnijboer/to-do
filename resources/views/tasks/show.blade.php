@extends('layouts.app')

@section('content')

    <h1>Task</h1>
    
    <p>
        <strong>Description: </strong>  {{ $task->description }}
    </p>
    <p>   
        <strong>Image: </strong>        {{ $task->image }}
    </p>
    <p>
        <strong>Created At: </strong>   {{ $task->created_at }} 
    </p>
    <p>   
        <strong>Completed: </strong>    {{ $task->completed ? 'Yes' : 'No' }}
        (<a href="/{{ $task->id }}/check">Toggle</a>)
    </p>
    <p>
        <a href="/{{ $task->id }}/edit">
            Edit Task
        </a>
        <form class="inline" action="/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit">
                Delete
            </button>
        </form>
    </p>

@endsection