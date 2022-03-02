@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex flex-column justify-content-center text-align-center">
            <div class="search d-flex flex-row justify-content-end pb-4">
                <form method="GET" action="#">
                    <div class="input-group">
                        <input type="text" name="search" class="story-search input-group-text" placeholder="Search">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
            @forelse ($posts as $post)
                <div class="d-flex flex-row story-card">
                    <a href="/story/{{ $post->slug }}" class="story-link"></a>
                    <div class="d-flex col story-card-img">
                        <img class="story-list-photo" src="{{ url($post->primaryContent()->photo->uri) }}" />
                    </div>
                    <div class="d-flex col align-items-baseline">
                        <article>
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->published_at->format('jS F Y') }}</p>
                            <p class="category"><a href="/categories/{{ $post->category->slug }}" class="category-link">{{ $post->category->name }}</a></p>
                            <p>{{ $post->excerpt }}</p>
                        </article>
                    </div>
                </div>
                @if (!$loop->last)
                    <hr class="story-hr">
                @endif
            @empty
                <div class="d-flex flex-row justify-content-center">
                    <p>No stories found!</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
