@extends('layouts.app')

@section('content')

    <h1>New Task</h1>
    
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
        <form action="/" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div>
                <label for="description">
                    <strong>Description</strong>
                </label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    placeholder="Lorem ipsum dolor sit amet"
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
            <p>
                <button type="submit">
                    Add
                </button>
            </p>
        </form>
    </div>
    
@endsection