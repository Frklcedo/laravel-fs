@extends('layouts.app')

@section('title', 'Edit task')

@section('styles')
<style type="text/css" media="screen">
 .error-message{
     color: red;
     font-size: 0.8rem;
 }
</style>

@endsection

@section('content')

{{-- $errors --}}
<form method="POST" id="" action="{{ route('tasks.update', ['id' => $task->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $task->title }}" id="title" />
        @error('title')
        <p class="error-message">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5" cols="" tabindex="">{{ $task->description }}</textarea>
        @error('description')
        <p class="error-message">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10" cols="" tabindex="">{{ $task->long_description }}</textarea>
        @error('long_description')
        <p class="error-message">
            {{ $message }}
        </p>
        @enderror
    </div>

    <div>
        <button type="submit">Edit task</button>
    </div>

</form>

@endsection
