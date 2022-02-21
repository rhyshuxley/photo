@extends('layouts.app')

@section('content')
<div class="content container">
    <div class="row justify-content-center width-80">
        <div class="col-md-12">
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
            <div class="card">
                <div class="card-header">{{ __('Upload Gear') }}</div>
                    <div class="card-body px-5">
                        <form action="{{ route('upload-gear') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group button col-md-8 offset-md-2 pl-4 mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" aria-describedby="file upload to">
                            </div>

                            <div class="form-group button col-md-4 offset-md-2 pl-4 mb-3">
                                <input type="file" id="image" name="image" />
                            </div>

                            <div class="form-group button col-md-2 offset-md-2 pl-4 mb-3">
                                <input type="number" class="form-control" name="order" id="order" placeholder="Order" aria-describedby="file upload to">
                            </div>

                            <input type="hidden" name="folder" value="gear" />

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection