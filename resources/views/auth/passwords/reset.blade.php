@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('password.update') }}">

    <input type="hidden" name="token" value="{{ $token }}">
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
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
                {{ __('Reset Password') }}
            </button>
        </div>
    </div>
</div>
</form>
@endsection
