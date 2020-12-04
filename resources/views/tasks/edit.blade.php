@extends('layouts.app')

@section('content')

    <h1>Edit Task</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <h4>The following errors occured:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div>
        <form action="/{{ $task->id }}" method="POST" enctype="multipart/form-data">
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