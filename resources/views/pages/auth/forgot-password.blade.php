@extends('layouts.auth')

@section('title') Lupa Password @endsection

@section('content')
<div class="card mb-4">
    <div class="card-body row p-0">
        <div class="col-12 col-lg-5 p-5">
            <h1>Lupa password</h1>
            <p>Masukkan email untuk mendapatkan token reset password.</p>
            <hr>
            <div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <button class="btn bg-primary text-white w-100 mb-3">Kirimkan saya token</button>
            </div>
            <hr>
            <p class="text-center">Sudah ingat? <a href="{{ route('login') }}">Sign in</a></p>
        </div>
        <div class="col-12 col-lg-7" style="background-image: url({{ asset('img/dina-lydia-mqnQ_vmLIGU-unsplash.jpg') }}); background-size: cover; border-radius: 0px .5rem .5rem 0px">
            &nbsp;
        </div>
    </div>
</div>
@endsection