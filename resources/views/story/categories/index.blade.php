@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex flex-column justify-content-center text-align-center mt-4">
            <div class="d-flex pb-4">
                <a href="/story" class="story-back"><i class="fa fa-solid fa-angle-left"></i> Stories</a>
            </div>
            @foreach ($posts as $post)
                <div class="d-flex flex-row story-card">
                    <a href="/story/{{ $post->slug }}" class="story-link"></a>
                    <div class="d-flex col story-card-img">
                        <img class="story-list-photo" src="{{ url($post->primaryContent()->photo->uri) }}" />
                    </div>
                    <div class="d-flex col align-items-baseline">
                        <article>
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->published_at->format('jS F Y') }}</p>
                            <p class="category"><span class="category-link">{{ $post->category->name }}</span></p>
                            <p>{{ $post->excerpt }}</p>
                        </article>
                    </div>
                </div>
                @if (!$loop->last)
                    <hr class="story-hr">
                @endif
            @endforeach
        </div>
    </div>
@endsection
