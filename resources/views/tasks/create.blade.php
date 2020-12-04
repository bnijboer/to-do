@extends('layouts.app')

@section('content')

    @section('heading', 'New Task')    

    <form
        action="/"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        
        <div class="col-10 mx-auto bg-light border p-3">

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
        
            <div class="d-flex justify-content-between small py-2">
                <label
                    class="font-weight-light text-uppercase"
                    for="description"
                >
                    Description
                </label>
                <input
                    class="col-8"
                    type="text"
                    id="description"
                    name="description"
                    placeholder="Lorem ipsum dolor sit amet..."
                    required
                >
            </div>
            <div class="d-flex justify-content-between small py-2">
                <label
                    class="font-weight-light text-uppercase"
                    for="image"
                >
                    Image
                </label>
                <input
                    class="col-8"
                    type="file"
                    id="image"
                    name="image"
                >
            </div>
            <div class="text-center pt-3">
                <button class="btn btn-success" type="submit">
                    Add
                </button>
            </div>
        </div>
    </form>
    
@endsection