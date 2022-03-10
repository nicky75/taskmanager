@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h2 class="section-subheading text-center">Login</h2>
        </div>
        <br>
        <div class="col-lg-12">


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail address <span class="amust">*</span></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password <span class="amust">*</span></label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                    </div>
                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">
                            Sing In
                        </button>
                        <a class="btn btn-secondary" href="/register">
                            Sign Up
                        </a>
                        <a class="btn btn-link" href="/forget-password">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection