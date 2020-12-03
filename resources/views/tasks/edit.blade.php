@extends('layouts.app')

@section('content')

    <h1>Edit Task</h1>
    
    <div>
        <form action="/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div>
                <input type="text" name="description" value="{{ $task->description }}">
            </div>
            <div>
                <input type="file" name="file" value="{{ $task->image }}">
            </div>
            <p>
                <button type="submit">
                    Update
                </button>
            </p>
        </form>
        <p>
            <form action="/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')
                
                <button type="submit">
                    Delete
                </button>
            </form>
        </p>
    </div>

@endsection