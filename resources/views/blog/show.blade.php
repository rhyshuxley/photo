@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex flex-column justify-content-center text-align-center">
        <div class="d-flex">
                <a href="/blog">Go back</a>
            </div>
            <div class="d-flex justify-content-center">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="d-flex">
                <article>
                    <p>{{ $post->summary }}</p>
                </article>
            </div>
        </div>
    </div>
@endsection