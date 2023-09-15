@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
<div>
    <a href="{{ route('tasks.create') }}">Add Task!!</a>
</div>
{{-- @if(count($tasks)) --}}
{{-- @foreach($tasks as $task) --}}
@forelse($tasks as $task)
{{-- <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> --}}
<a href="{{ route('tasks.show', ['task' => $task->id]) }}">
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

@if($tasks->count())

<nav>
    {{ $tasks->links() }}
</nav>

@endif
@endsection
