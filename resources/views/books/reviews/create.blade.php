@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add Review for {{ $book->title }}</h1>

    <form method="POST" action="{{ route('books.reviews.store', $book) }}" novalidate>
        @csrf
        <div class="mb-4">
            <label for="review">Review</label>
            <textarea name="review" id="review" class="input" required></textarea>
            @error('review')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="input" required>
                <option value="">Select a Rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            @error('rating')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>


        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
