@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{ route('password.email') }}">
<div class="modal-content">
    <div class="modal-body">
        <div class="app-logo-inverse mx-auto mb-3"></div>
        <div class="h5 modal-title text-center">
            <h4 class="mt-2">
                <div>{{ __('Reset Password') }}</div>
            </h4>
        </div>
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        
    </div>
    <div class="modal-footer clearfix">
        <div class="float-right">
            <button type="submit" class="btn btn-primary btn-lg">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </div>
</div>
</form>
@endsection
