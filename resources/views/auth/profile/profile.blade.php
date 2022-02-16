@extends('layouts.app')

@section('content')
    <div class="content container"> 
        <div class="row">  
            <div class="col-md-3 mt-3 pt-3">
                <div class="profile-avatar">
                    <label for="file-input">
                        <img src="{{ url('images/logo/logo2.png') }}" class="border border-dark img-responsive rounded-circle" alt="">
                    </label>
                    <input id="file-input" type="file" class="d-none"/>
                </div>
                <div class="profile-usertitle d-flex justify-content-center">
                    <div class="profile-usertitle-name">Click picture to edit</div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Update Profile') }}</div>
                        <div class="card-body px-5">
                            <form action="{{ route('updateProfile') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label text-md-left">{{ __('Name') }}</label>
                                    <input type="text" class="form-control col-10 @error('name') is-invalid @enderror" placeholder="Name" id="name" name="name" value="{{ $user->name }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label text-md-left">{{ __('Email') }}</label>
                                    <input type="email" class="form-control col-10 @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-4 col-form-label text-md-left">{{ __('Change password') }}</label>
                                    <input type="password" class="form-control col-10 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Change Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-10 pl-5 pt-3">
                                        <button type="submit" class="btn btn-primary submitButton">Update</button>
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
