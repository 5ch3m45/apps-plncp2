@extends('layouts.app')

@section('title') Profil Saya @endsection

@section('content')
    <div>
        <h3><i class="bi bi-person-circle"></i> Profil Saya</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil Saya</li>
            </ol>
        </nav>

        @if (session('message') && session('level'))
            <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
        @endif

        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center ">
                        @if($user->image)
                        <img class="rounded-circle mb-3 mt-4" src="{{ url($user->image) }}" width="160" height="160">
                        @else
                        <img class="rounded-circle mb-3 mt-4" src="{{ asset('img/picture.png') }}" width="160" height="160">
                        @endif
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#ubah-foto-modal">Ubah Foto</button></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="mb-4">Informasi</h5>
                                <form method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="username"><strong>Nama</strong></label>
                                                <input class="form-control" type="text" id="username" placeholder="Nama lengkap anda..." name="name" value="{{ $user->name }}"></div>
                                                @error('name') <div><small class="text-danger">{{ $message }}</small></div> @enderror
                                        </div>
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="email"><strong>Alamat Email</strong></label>
                                                <input class="form-control" type="email" id="email" placeholder="user@example.com" readonly value="{{ $user->email }}"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="first_name"><strong>Unit/Divisi</strong></label>
                                                <input class="form-control" type="text" id="first_name" placeholder="Developer" name="unit" value="{{ $user->unit }}"></div>
                                                @error('unit') <div><small class="text-danger">{{ $message }}</small></div> @enderror
                                        </div>
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="last_name"><strong>Nomor HP</strong></label>
                                                <input class="form-control" type="text" id="last_name" placeholder="Nomor HP" name="phone" value="{{ $user->phone }}"></div>
                                                @error('phone') <div><small class="text-danger">{{ $message }}</small></div> @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Simpan Perubahan</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="mb-4">Keamanan</h5>
                                <form method="POST" action="{{ route('profile.password') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="address"><strong>Password Baru</strong></label>
                                        <input class="form-control" type="password" id="address" placeholder="******" name="new_password">
                                        @error('new_password') <div><small class="text-danger">{{ $message }}</small></div> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="address"><strong>Konfirmasi Password Baru</strong></label>
                                        <input class="form-control" type="password" id="address-1" placeholder="******" name="new_password_confirm">
                                        @error('new_password_confirm') <div><small class="text-danger">{{ $message }}</small></div> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">Ubah Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal.ubah-foto/>
@endsection