<x-layout>
    <x-slot name="heading">
        Reviews
    </x-slot>

    <ul>
        @if ($reviews)
            @foreach ($reviews as $review)
                <li>
                    <strong>Review written by:</strong> {{ $review->userName }}
                </li>
                <li><strong>Title:</strong> {{ $review->title }}</li>
                <li><strong>Body:</strong> {{ $review->body }}</li>
                <li><strong>Rating:</strong> {{ $review->rating }}</li>
            @endforeach
        @else
            <h1>No reviews to show</h1>
        @endif
    </ul>
    <br>
</x-layout>
