@extends('layouts.app')

@section('content')
    
    @section('heading', 'Edit Task')
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>The following error(s) occured:</h6>
            
            @foreach ($errors->all() as $error)
                <div class="small pl-2">
                    {{ $error }}
                </div>
            @endforeach
        </div>
    @endif
    
    <div>
        <form
            class="d-inline-block"
            action="/{{ $task->id }}"
            method="POST"
            enctype="multipart/form-data"
        >
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
                >
            </div>
            <div>
                <button class="btn btn-primary" type="submit">
                    Update
                </button>
            </div>
        </form>
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