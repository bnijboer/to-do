@extends('layouts.app')

@section('content')

    @section('heading', 'Task Details')
    
    <div class="col-10 mx-auto bg-light border p-3">
        <div class="d-flex justify-content-between small py-2">
            <div class="font-weight-light text-uppercase">
                Description
            </div>
            <div>
                {{ $task->description }}
            </div>
        </div>
        <div class="d-flex justify-content-between small py-2">
            <div class="font-weight-light text-uppercase">
                Image
            </div>
            
            <div>
                @if(isset($task->image))
                    <img src="{{ asset('storage/' . $task->image) }}">
                    <a
                        class="d-block btn-sm btn-danger text-center text-decoration-none mt-2"
                        href="{{ $task->id }}/remove-image">
                        remove image
                    </a>
                @else
                    none
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-between small py-2">
            <div class="font-weight-light text-uppercase">
                Created at
            </div>
            <div>
                {{ $task->created_at }} 
            </div>
        </div>
        <div class="d-flex justify-content-between small py-2">
            <div class="font-weight-light text-uppercase">
                Completed
            </div>
            <div>
                {{ $task->completed ? 'yes' : 'no' }}
                
                <a class="btn-sm btn-info text-decoration-none ml-3" href="/{{ $task->id }}/mark">
                    {{ $task->completed ? 'uncheck' : 'check' }}
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-3">
            <div class="mr-4">
                <a class="btn btn-warning text-white" href="/{{ $task->id }}/edit">
                    Edit
                </a>
            </div>
            <div>
                <form action="/{{ $task->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <button class="btn btn-danger" type="submit">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection