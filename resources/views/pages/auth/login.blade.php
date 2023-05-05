@extends('layouts.auth')

@section('title') Login @endsection

@section('content')
<div class="card mb-4">
    <div class="card-body row p-0">
        <div class="col-12 col-lg-5 p-5">
            <h1>Sign in</h1>
            <p>Masukkan email dan password yang valid untuk masuk ke IAMSystem.</p>
            <hr>
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @if(session('email_error')) <div><small class="text-danger">{{ session('email_error') }}</small></div> @endif
                </div>
                <div class="mb-5">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-1">
                    <div class="d-flex justify-content-between">
                        <div>@if(session('password_error')) <small class="text-danger">{{ session('password_error') }}</small> @else &nbsp @endif</div>
                        <a id="togglePassword" href="javascript:void(0)">Lihat password</a>
                    </div>
                </div>
                <button type="submit" class="btn bg-primary text-white w-100 mb-3">Sign in</button>
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Ingat saya</label>
                    </div>
                    <a href="{{ route('forgot-password') }}">Lupa kata sandi?</a>
                </div>
            </form>
            <hr>
            <p class="text-center">Belum punya akun? <a href="mailto:support@iamsystem.com"> Hubungi admin</a></p>
        </div>
        <div class="col-12 col-lg-7" style="background-image: url({{ asset('img/dina-lydia-mqnQ_vmLIGU-unsplash.jpg') }}); background-size: cover; border-radius: 0px .5rem .5rem 0px">
            &nbsp;
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    let togglePassword = $('#togglePassword');
    let passwordField = $('input[name=password]');
    togglePassword.on('click', function() {
        if(passwordField.attr('type') == 'password') {
            passwordField.attr('type', 'text');
            togglePassword.text('Sembunyikan password');
        } else {
            passwordField.attr('type', 'password');
            togglePassword.text('Lihat password');
        }
    })
</script>
@endsection
