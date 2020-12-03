@extends('layouts.app')

@section('content')

    <h1>Current Tasks</h1>

    @forelse ($tasks as $task)
        <div>
            <a href="/{{ $task->id }}/check">
                Check
            </a>
            <a href="/{{ $task->id }}">
                <span style="{{ ($task->completed ? 'text-decoration: line-through' : '') }}">
                    {{ $task->description }}
                </span>
            </a>
        </div>
    @empty
        <p>
            No tasks listed.
        </p>
    @endforelse

@endsection
