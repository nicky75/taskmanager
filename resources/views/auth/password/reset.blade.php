@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-center">Reset Password</h2>
        </div>
        <br>
        <div class="col-lg-12">
            <form method="POST" action="/reset-password">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection