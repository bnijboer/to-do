@extends('layouts.app')

@section('content')

    @section('heading', 'New Task')    
    
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
                <button class="btn btn-success" type="submit">
                    Add
                </button>
            </p>
        </form>
    </div>
    
@endsection