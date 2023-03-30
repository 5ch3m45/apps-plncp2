@extends('layouts.app')

@section('title') Lampiran 2F3 @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-spreadsheet"></i> Lampiran 2F3</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lampiran 2F3</li>
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
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">FTP/REG</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Unit Level 2</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Jenis PDP</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Fungsi</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Dikosongkan</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Saldo per 1 Januari 2022</td>
                                <td rowspan="3" style="font-weight: bold;background: var(--bs-table-striped-bg);">Kode Sumber Dana</td>
                                <td colspan="8" style="background: var(--bs-table-striped-bg);font-weight: bold;">Penambahan Investasi</td>
                                <td colspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Pengurangan Investasi</td>
                                <td colspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Koreksi</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Saldo per 31 Desember 2022</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">% Progress Pekerjaan</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Hambatan Penyelesaian</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Penjelasan Koreksi Lainnya</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Mata Uang</td>
                                <td colspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Pinjaman</td>
                                <td colspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Bantuan</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Kapitalisasi Bunga/ Selisih Kurs</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">APBN</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Lainnya</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">STP/AT/ATBM</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Lainnya (Pengurangan Material &amp; Pembayaran dimuka)</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Koreksi Antar Fungsi</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Penerimaan (Pengiriman) PDP ke Unit Lain</td>
                                <td rowspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Koreksi Lainnya</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-table-striped-bg);font-weight: bold;">Valas</td>
                                <td style="background: var(--bs-table-striped-bg);font-weight: bold;">EQV. RP</td>
                                <td style="background: var(--bs-table-striped-bg);font-weight: bold;">Valas</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">EQV. RP</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>0002.SPK.DAN.02.07/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>402,319,101</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>402,319,101</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0009/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>843,786,500</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>843,786,500</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0010/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>871,931,736</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>871,931,736</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0011/DAN.02.03/UP3.CPP/2019</td>
                                <td>-<br></td>
                                <td>-</td>
                                <td>-</td>
                                <td>7,795,726,683</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>7,795,726,683</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0015/DAN.02.03/UP3.CPP/2019</td>
                                <td>-<br></td>
                                <td>-</td>
                                <td>-</td>
                                <td>78,989,758</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>78,989,758</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0024/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>226,941,426</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>226,941,426</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0028/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>817,305,676</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>817,305,676</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0029/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>6,185,925,483</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>6,185,925,483</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0035/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>1,358,130,140</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>1,358,130,140</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>0036/DAN.02.03/UP3.CPP/2019</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>569,032,436</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>569,032,436</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
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