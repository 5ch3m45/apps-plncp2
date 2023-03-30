@extends('layouts.app')

@section('title') Kartu PDP @endsection

@section('content')
    <div>
        <div class="d-flex justify-content-between">
            <div>
                <h3><i class="bi bi-file-earmark-medical"></i> @if($is_arsip) Arsip @endif Kartu PDP</h3>
            </div>
            @if($is_arsip)
            <a href="/kartu-pdp">
                <button class="btn btn-primary my-auto"><i class="bi bi-archive-fill"></i> Lihat Kartu PDP Aktif</button>
            </a>
            @else
            <a href="/kartu-pdp?arsip=1">
                <button class="btn btn-warning my-auto"><i class="bi bi-archive-fill"></i> Lihat Arsip Kartu PDP</button>
            </a>
            @endif
        </div>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">@if($is_arsip) Arsip @endif Kartu PDP</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5>Filter</h5>
                <form class="row">
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Cari</label>
                        <input type="text" name="search" class="form-control" placeholder="Cari" value="">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Urutkan</label>
                        <select name="sort" class="form-control" value="">
                            <option value="name">Nama</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <div>
                            <label class="form-label">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"><i class="bi bi-search"></i> Cari</button>
                        <a href="/dashboard/admin/create">
                            <button type="button" class="btn btn-success">+ Baru</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table class="table table-hover">
                        <thead>
                            <tr style="background: var(--bs-table-striped-bg);">
                                <td style="font-weight: bold;">Nomor SPK</td>
                                <td style="font-weight: bold;">Tanggal SPK</td>
                                <td style="font-weight: bold;">Nama Rekanan</td>
                                <td style="font-weight: bold;">Nilai SPK</td>
                                <td style="font-weight: bold;">Pekerjaan</td>
                                <td style="font-weight: bold;">Nomor BASTP</td>
                                <td style="font-weight: bold;">Tgl. BASTP</td>
                                <td style="font-weight: bold;">Tgl. Awal Kontrak</td>
                                <td style="font-weight: bold;">Tgl. Akhir Kontrak</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/kartu-pdp/show/1">0031.SPBK/DAN.01.02/D06040000/2022</a></td>
                                <td>-</td>
                                <td>KSO PT TAWAKAL KARYA TEKNIK - PT MAISYARA SALSABILLA ABADI</td>
                                <td>-</td>
                                <td>PENGADAAN JASA REHABILITASI PHB TR KRITIS RAWAN GANGGUAN 16 GARDU DI PLN UP3 CEMPAKA PUTIH</td>
                                <td>0334.BA/DAN.01.02/F06040000/2022 (TERMIN 1-95%)</td>
                                <td>12 DESEMBER 2022</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection