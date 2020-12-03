@extends('layouts.app')

@section('content')

    <h1>New Task</h1>

    <div>
        <form action="/" method="POST">
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