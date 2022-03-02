@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex flex-column justify-content-center text-align-center">
            <div class="d-flex">
                <a href="/story" class="story-back"><i class="fa fa-solid fa-angle-left"></i> Stories</a>
            </div>
            <div class="d-flex justify-content-center">
                <h2 class="post-title">{{ $post->title }}</h2>
            </div>
            <div class="d-flex">
                <article>
                    <p>{{ $post->summary }}</p>
                    @foreach ($post->contents as $content)
                        <div class="d-flex align-items-center justify-content-center content-image">
                            <img src="{{ url($content->photo()->uri) }}" />
                        </div>
                        <p>{{ $content->caption }}</p>
                    @endforeach
                </article>
            </div>
        </div>
    </div>
@endsection