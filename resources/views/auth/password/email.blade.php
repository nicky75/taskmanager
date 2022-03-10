@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-center">Reset Password</h2>
        </div>
        <br>
        <div class="col-lg-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="/forget-password">
                @csrf
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">
                            Send Password Reset Link
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection