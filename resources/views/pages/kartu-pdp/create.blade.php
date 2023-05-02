@extends('layouts.app')

@section('title')
    Tambah Kartu PDP
@endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-medical"></i> Tambah Kartu PDP</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('kartu-pdp.index') }}">Kartu PDP</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Kartu PDP</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Form Kartu PDP</h5>
                @if (session('message'))
                    <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
                @endif
                <form method="POST" action="{{ route('kartu-pdp.store') }}">
                    @csrf
                    <table id="form-table" class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nomor SPK</th>
                                <td>
                                    <input type="text" name="nomor_spk"
                                        class="form-control @error('nomor_spk') is-invalid @enderror" value="{{ old('nomor_spk') }}">
                                    @error('nomor_spk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal SPK</th>
                                <td>
                                    <input type="date" name="tanggal_spk"
                                        class="form-control @error('tanggal_spk') is-invalid @enderror" value="{{ old('tanggal_spk') }}">
                                    @error('tanggal_spk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Rekanan</th>
                                <td><input type="text" name="nama_rekanan"
                                        class="form-control @error('nama_rekanan') is-invalid @enderror" value="{{ old('nama_rekanan') }}">
                                    @error('nama_rekanan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Nilai SPK</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input
                                            class="form-control numbering @error('nilai_spk') is-invalid @enderror" name="nilai_spk"
                                            type="text" value="{{ old('nilai_spk') }}">
                                        @error('nilai_spk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td><input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                        name="pekerjaan" value="{{ old('pekerjaan') }}">
                                    @error('pekerjaan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Nomor BASTP</th>
                                <td><input type="text" class="form-control @error('nomor_bastp') is-invalid @enderror"
                                        name="nomor_bastp" value="{{ old('nomor_bastp') }}">
                                    @error('nomor_bastp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Tgl. Awal Kontrak</th>
                                <td><input type="date"
                                        class="form-control @error('tanggal_awal_kontrak') is-invalid @enderror"
                                        name="tanggal_awal_kontrak" value="{{ old('tanggal_awal_kontrak') }}">
                                    @error('tanggal_awal_kontrak')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Tgl. Akhir Kontrak</th>
                                <td><input type="date"
                                        class="form-control @error('tanggal_akhir_kontrak') is-invalid @enderror"
                                        name="tanggal_akhir_kontrak" value="{{ old('tanggal_akhir_kontrak') }}">
                                    @error('tanggal_akhir_kontrak')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary ms-2" type="submit"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
