@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h2 class="section-subheading text-center">Register</h2>
        </div>
        <br>
        <div class="col-lg-12">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name <span class="amust">*</span></label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail Address <span class="amust">*</span></label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                </div>
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password <span class="amust">*</span></label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password <span class="amust">*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection