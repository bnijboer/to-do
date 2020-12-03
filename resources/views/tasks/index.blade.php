@extends('layouts.app')

@section('content')

<h1>Tasks</h1>

@forelse ($tasks as $task)
    <div>
        <a href="/{{ $task->id }}">
            {{ $task->description }}
        </a>
    </div>
@empty
    <p>
        No tasks listed.
    </p>
@endforelse
