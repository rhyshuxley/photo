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
                        <th>Name</th>
                        <th>Order</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gear as $item)
                        <tr>
                            <td class="align-middle"><img src="{{ $item->photo->uri }}" width="50px" /></td>
                            <td class="align-middle">{{ $item->name }}</td>
                            <td class="align-middle">{{ $item->order }}</td>
                            <td class="align-middle">
                                <form action="{{ route('deleteGear') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="gearId" name="gearId" value="{{ $item->id }}" />
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