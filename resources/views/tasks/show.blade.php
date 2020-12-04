@extends('layouts.app')

@section('content')

    @section('heading', 'View Task')
    
    <p>
        <strong>Description:</strong>
        
        {{ $task->description }}
    </p>
    <p>
        <strong>Image:</strong>
        
        @if(isset($task->image))
            <img src="{{ asset('storage/' . $task->image) }}">
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
    <div>
        <div class="d-inline-block">
            <a class="btn btn-warning" href="/{{ $task->id }}/edit">
                Edit
            </a>
        </div>
        <div class="d-inline-block">
            <form action="/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')
                
                <button class="btn btn-danger" type="submit">
                    Delete
                </button>
            </form>
        </div>
    </div>

@endsection