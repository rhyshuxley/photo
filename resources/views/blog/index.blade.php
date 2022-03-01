@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex flex-column justify-content-center text-align-center">
            <div class="d-flex justify-content-center">
                <h2>Blogs</h2>
            </div>
            @foreach ($posts as $post)
                <div class="d-flex">
                    <article>
                        <h4><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                        <p>{{ $post->published_at }}</p>
                        <p>{{ $post->excerpt }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection