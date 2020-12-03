@extends('layouts.app')

@section('content')

    <h1>Edit Task</h1>
    
    <div>
        <form action="/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div>
                <label for="description">
                    <strong>Description</strong>
                </label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    value="{{ $task->description }}"
                    required
                >
            </div>
            <div>
                <label for="image">
                    <strong>Image</strong>
                </label>
                <input
                    type="file"
                    id="image"
                    name="image"
                    value="{{ $task->image }}"
                >
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