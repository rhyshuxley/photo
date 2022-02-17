@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-sm">
                    <img src="{{ url('images/about/me2.jpg') }}" class="mx-auto d-block" style="max-height: 75%; max-width: 90%" alt="logo">
                </div>
                <div class="col-sm text-left">
                    <p>My name is Rhys, and I am a hobby photographer in Birmingham. I mainly take pictures of landscapes and my cat, Kiki.</p>
                    <p>I enjoy nothing more than going for a long, slow walk in a beautiful area and looking for ways to capture that beauty. I have a soft spot for waterfalls, and don't take many photos of people.</p>
                    <p>I currently use a Canon 90D and a mixture of lenses to try to cover a variety of different styles of photos.</p>
                    <p>See some pictures below or <a href="/">here.</a></p>
                </div>
            </div>
        </div>
        <div id="carousel"></div>
    </div>
@endsection