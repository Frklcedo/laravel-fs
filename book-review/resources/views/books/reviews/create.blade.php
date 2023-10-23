@extends('layouts.app')

@section('content')
<h1 class="mb-10 text-2xl">Add review for {{ $book->title }}</h1>

<form method="POST" id="" action="{{ route('books.reviews.store', $book) }}">
    @csrf

    <label for="review">Review</label>
    <textarea name="review" id="review" required class="input mb-4"></textarea>

    <label for="rating">Rating</label>
    <select id="rating" name="rating" class="input mb-4" required>
        <option value="">Select a rating</option>
        @for( $i = 1; $i <= 5; $i++ ) <option value="{{ $i }}">
            {{ $i }}
            </option>

            @endfor
    </select>

    <button type="submit" class="btn">Review</button>

</form>
@endsection
