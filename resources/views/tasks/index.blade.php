@extends('layouts.app')

@section('content')

    @section('heading', 'Overview')    

    <div>
        @forelse ($tasks as $task)
            <div class="d-flex justify-content-between py-2">
                <div class="hover-mark">
                    <a
                        class="font-weight-light {{ ($task->completed ? 'mark-unmark' : '') }}"
                        href="/{{ $task->id }}/mark"
                    >
                        {{ $task->description }}
                    </a>
                </div>
                <div>
                    <a class="btn btn-sm btn-info" href="/{{ $task->id }}">
                        Details
                    </a>
                </div>
            </div>
        @empty
            <p>
                No tasks listed.
            </p>
        @endforelse
    </div>
        
@endsection
