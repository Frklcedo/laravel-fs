@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="link">Add Task!!</a>
</nav>
{{-- @if(count($tasks)) --}}
{{-- @foreach($tasks as $task) --}}
@forelse($tasks as $task)
{{-- <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> --}}
<a
    href="{{ route('tasks.show', ['task' => $task->id]) }}"
    @class(['line-through' => $task->completed])
>
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

<nav class="mt-4">
    {{ $tasks->links() }}
</nav>

@endif
@endsection
