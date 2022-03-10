<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-center">Verify Your Email Address</h2>
        </div>
        <br>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Verify Your Email Address</div>
                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif
                    <a href="{{ url('/reset-password/'.$token) }}">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>