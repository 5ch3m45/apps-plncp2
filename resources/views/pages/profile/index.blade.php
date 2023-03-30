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

        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center "><img class="rounded-circle mb-3 mt-4" src="/assets/img/placeholder.jpeg" width="160" height="160">
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Ubah Foto</button></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="mb-4">Informasi</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3"><label class="form-label" for="username"><strong>Nama</strong></label><input class="form-control" type="text" id="username" placeholder="Nama lengkap anda..." name="username" value="Maulana Ichwan A"></div>
                                        </div>
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>Alamat Email</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" value="maulanaichwana@gmail.com"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>Unit/Divisi</strong></label><input class="form-control" type="text" id="first_name" placeholder="Developer" name="unit"></div>
                                        </div>
                                        <div class="col-xl-6 col-xxl-6">
                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Nomor HP</strong></label><input class="form-control" type="text" id="last_name" placeholder="Nomor hp" name="last_name" value="088233010696"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Simpan Perubahan</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="mb-4">Keamanan</h5>
                                <form>
                                    <div class="mb-3"><label class="form-label" for="address"><strong>Password Baru</strong></label><input class="form-control" type="text" id="address" placeholder="******" name="new_password"></div>
                                    <div class="mb-3"><label class="form-label" for="address"><strong>Konfirmasi Password Baru</strong></label><input class="form-control" type="text" id="address-1" placeholder="******" name="new_password_confirm"></div>
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Ubah Password</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection