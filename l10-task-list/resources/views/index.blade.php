@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
    {{-- @if(count($tasks)) --}}
    {{-- @foreach($tasks as $task) --}}
    @forelse($tasks as $task)
    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
        <div>
            <h2>{{ $task->title }}</h2>
        </div>
    </a>
    {{-- @endforeach --}}
    {{-- @else --}}
    @empty
    <div>
        There are no tasks
    </div>
    @endforelse
    {{-- @endif --}}
@endsection
