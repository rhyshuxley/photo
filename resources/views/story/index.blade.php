@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex flex-column justify-content-center text-align-center mt-4">
            @foreach ($posts as $post)
                <a href="/story/{{ $post->slug }}" class="story-link">
                    <div class="d-flex flex-row story-card">
                        <div class="d-flex col story-card-img">
                            <img class="story-list-photo" src="{{ url($post->contents()->first()->photo()->uri) }}" />
                        </div>
                        <div class="d-flex col align-items-baseline">
                            <article>
                                <h4>{{ $post->title }}</h4>
                                <p>{{ $post->published_at->format('jS F Y') }}</p>
                                <p>{{ $post->excerpt }}</p>
                            </article>
                        </div>
                    </div>
                </a>
                @if (!$loop->last)
                    <hr class="story-hr">
                @endif
            @endforeach
        </div>
    </div>
@endsection
