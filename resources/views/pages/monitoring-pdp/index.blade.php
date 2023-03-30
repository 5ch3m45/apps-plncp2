@extends('layouts.app')

@section('title') Monitoring PDP @endsection

@section('content')
    <div>
        <h3><i class="bi bi-speedometer"></i> Monitoring PDP</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Monitoring PDP</li>
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
                            <tr>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">No</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Uraian Pekerjaan</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Fungsi TL/GI</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Jenis PDP pada SAP</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Business Area</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Unit</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Tahun Kontrak</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nomor Kontrak</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Tgl. Awal Kontrak</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Tgl. Akhir Kontrak</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Pelaksana Kontrak Pekerjaan</td>
                                <td colspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">Saldo Awal</td>
                                <td colspan="7" style="font-weight: bold;background: var(--bs-table-striped-bg);">Mutasi</td>
                                <td colspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">Saldo Akhir</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Progress Fisik</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Jenis PDP pada PMO</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Keterangan Progress</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Kendala Progress</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Target N+25</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Realisasi Settlement thd. Target N+25</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Point</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Jasa</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Material</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Beban Pinjaman</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Total Saldo PDP per 1 Feb 2023</td>
                                <td colspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Penambahan</td>
                                <td colspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">Pengurangan</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Jasa</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Material</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Beban Pinjaman</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Total Saldo PDP per 28 Februari 2023</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Jasa</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Material</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Beban Pinjaman</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Jasa</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Material</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Beban Pinjaman</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Entry Date SAP</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="kartu-pdp-edit.html">PEMBANGUNAN GARDU SUSUN BETON ATAP MIRING II</a></td>
                                <td>Sistem Distribusi</td>
                                <td>Gardu Distribusi</td>
                                <td>5481</td>
                                <td>Pondok Gede</td>
                                <td>2022</td>
                                <td>0049.Pj/DAN.01.03/D06140000/2022<br></td>
                                <td>19/07/2022</td>
                                <td>31/01/2023</td>
                                <td>KSO PT GALAHERANG INDAH - PT AKBAR TEKNIK</td>
                                <td>100,000,000</td>
                                <td>50,000,000</td>
                                <td>1,000,000</td>
                                <td>151,000,000</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>100,000,000</td>
                                <td>50,000,000</td>
                                <td>1,000,000</td>
                                <td>10/02/2023</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>100%</td>
                                <td>-</td>
                                <td>Pekerjaan Selesai</td>
                                <td>Pekerjaan Selesai</td>
                                <td>25/02/2023</td>
                                <td>5</td>
                                <td>120</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="kartu-pdp-edit.html">PENGGANTIAN KWH METER PASCABAYAR &gt;15 TAHUN DAN 1 PHASA RUSAK</a></td>
                                <td>Sistem Distribusi</td>
                                <td>Perlengkapan lain-lain Distribusi</td>
                                <td>5481</td>
                                <td>Pondok Gede</td>
                                <td>2022</td>
                                <td>0053.PJ/DAN.01.02/D06140000/2022</td>
                                <td>09/08/2022</td>
                                <td>31/01/2023</td>
                                <td>PT PACITAN SERIBU SATU GOA</td>
                                <td>50,000,000</td>
                                <td>75,000,000</td>
                                <td>2,000,000</td>
                                <td>127,000,000</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>50,000,000</td>
                                <td>75,000,000</td>
                                <td>2,000,000</td>
                                <td>28/02/2023</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>100%</td>
                                <td>-</td>
                                <td>Pekerjaan Selesai</td>
                                <td>Pekerjaan Selesai</td>
                                <td>25/02/2023</td>
                                <td>3</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="kartu-pdp-edit.html">STANDARISASI TRAFO GARDU DISTRIBUSI TIM 2</a></td>
                                <td>Sistem Distribusi</td>
                                <td>Gardu Distribusi</td>
                                <td>5481</td>
                                <td>Pondok Gede</td>
                                <td>2022</td>
                                <td>0058.PJ/DAN.01.02/D06140000/2022</td>
                                <td>02/08/2022</td>
                                <td>31/01/2023</td>
                                <td>PT ANGGADA PERKASA TEKNIK</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>25,000,000</td>
                                <td>50,000,000</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>-</td>
                                <td>25,000,000</td>
                                <td>50,000,000</td>
                                <td>0</td>
                                <td>75,000,000</td>
                                <td>50%</td>
                                <td>D3</td>
                                <td>Pemasangan Peralatan</td>
                                <td>Pekerjaan Belum Selesai</td>
                                <td>25/04/2023</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="kartu-pdp-edit.html">PENGGANTIAN RAK TR RAWAN GANGGUAN</a></td>
                                <td>Sistem Distribusi</td>
                                <td>Gardu Distribusi</td>
                                <td>5481</td>
                                <td>Pondok Gede</td>
                                <td>2022</td>
                                <td>0001.PJ/DAN.01.02/D06140000/2023</td>
                                <td>01/01/2023</td>
                                <td>31/01/2023</td>
                                <td>PT EYSSA JANTRA MANDIRI</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>100,000,000</td>
                                <td>0</td>
                                <td>0</td>
                                <td>100,000,000</td>
                                <td>0</td>
                                <td>25/02/2023</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>100%</td>
                                <td>-</td>
                                <td>Pekerjaan Selesai</td>
                                <td>Pekerjaan Selesai</td>
                                <td>25/02/2023</td>
                                <td>-</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="kartu-pdp-edit.html">STANDARISASI KUBIKEL GARDU DISTRIBUSI LOT 1</a></td>
                                <td>Sistem Distribusi</td>
                                <td>Gardu Distribusi</td>
                                <td>5481</td>
                                <td>Pondok Gede</td>
                                <td>2022</td>
                                <td>0060.PJ/DAN.01.02/D06140000/2022</td>
                                <td>01/08/2022</td>
                                <td>31/01/2023</td>
                                <td>PT IRTHIAWAN BERSAUDARA</td>
                                <td>80,000,000</td>
                                <td>125,000,000</td>
                                <td>3,000,000</td>
                                <td>208,000,000</td>
                                <td>0</td>
                                <td>25,000,000</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>-</td>
                                <td>80,000,000</td>
                                <td>150,000,000</td>
                                <td>3,000,000</td>
                                <td>233,000,000</td>
                                <td>60%</td>
                                <td>D3</td>
                                <td>Pemasangan Peralatan</td>
                                <td>Pekerjaan Belum Selesai</td>
                                <td>25/02/2023</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="kartu-pdp-edit.html">STANDARISASI KUBIKEL GARDU KEY POINT DAN PEMASANGAN KUBIKEL LBS GARDU PORTAL</a></td>
                                <td>Sistem Distribusi</td>
                                <td>Gardu Distribusi</td>
                                <td>5481</td>
                                <td>Pondok Gede</td>
                                <td>2022</td>
                                <td>0062.PJ/DAN.01.02/D06140000/2022</td>
                                <td>02/08/2022</td>
                                <td>31/01/2023</td>
                                <td>PT BAGUS PEDRIANSYAH</td>
                                <td>75,000,000</td>
                                <td>75,000,000</td>
                                <td>4,000,000</td>
                                <td>154,000,000</td>
                                <td>0</td>
                                <td>20,000,000</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>-</td>
                                <td>75,000,000</td>
                                <td>95,000,000</td>
                                <td>4,000,000</td>
                                <td>174,000,000</td>
                                <td>70%</td>
                                <td>D3</td>
                                <td>Pemasangan Peralatan<br></td>
                                <td>Pekerjaan Belum Selesai</td>
                                <td>25/02/2023</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>305,000,000</td>
                                <td>325,000,000</td>
                                <td>10,000,000</td>
                                <td>640,000,000</td>
                                <td>25,000,000</td>
                                <td>195,000,000</td>
                                <td>0</td>
                                <td>150,000,000</td>
                                <td>225,000,000</td>
                                <td>3,000,000</td>
                                <td></td>
                                <td>180,000,000</td>
                                <td>295,000,000</td>
                                <td>7,000,000</td>
                                <td>482,000,000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>103</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection