@extends('layouts.app')

@section('content')

    <h1>All Tasks</h1>

    @forelse ($tasks as $task)
        <div>
            <a href="/{{ $task->id }}/check">
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
                
                <button type="submit">Delete</button>
            </form>
        </div>
    @empty
        <p>
            No tasks listed.
        </p>
    @endforelse

@endsection
