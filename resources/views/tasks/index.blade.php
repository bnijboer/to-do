@extends('layouts.app')

@section('content')

    @section('heading', 'All Tasks')    

    @forelse ($tasks as $task)
        <div>
            <a href="/{{ $task->id }}/mark">
                Check
            </a>
            <a href="/{{ $task->id }}">
                <span class="{{ ($task->completed ? 'task-completed' : '') }}">
                    {{ $task->description }}
                </span>
            </a>
            <form class="inline" action="/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')
                
                <button class="btn btn-danger" type="submit">
                    Delete
                </button>
            </form>
        </div>
    @empty
        <p>
            No tasks listed.
        </p>
    @endforelse

@endsection
