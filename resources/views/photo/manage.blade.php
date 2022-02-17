@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">
            @if(session('errors'))
                <div class="message mb-2 alert alert-danger" role="alert">
                    <span class="msg">{{ session('errors') }}</span>
                </div>
            @endif
            @if(session('success'))
                <div class="message mb-2 alert alert-success" role="alert">
                    <span class="msg">{{ session('success') }}</span>
                </div>
            @endif
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>Filename</th>
                        <th>Folder</th>
                        <th>Height</th>
                        <th>Width</th>
                        <th>Uploaded by</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            <td class="align-middle"><img src="{{ $photo->uri }}" width="50px" /></td>
                            <td class="align-middle">{{ $photo->filename }}</td>
                            <td class="align-middle">{{ $photo->folder }}</td>
                            <td class="align-middle">{{ $photo->height }}</td>
                            <td class="align-middle">{{ $photo->width }}</td>
                            <td class="align-middle">{{ $photo->user->name }}</td>
                            <td class="align-middle">
                                <form action="{{ route('deletePhoto') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="photoId" name="photoId" value="{{ $photo->id }}" />
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection