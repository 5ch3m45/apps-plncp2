@extends('layouts.app')

@section('title') Detail Monitoring PFK @endsection

@section('content')
    <div>
        <h3><i class="bi bi-eyeglasses"></i> Detail Monitoring PFK</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Monitoring PFK</a></li>
                <li class="breadcrumb-item active" aria-current="page">0031.SPBJ/DAN.01.02/D06040000/2022</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Data SAP</h5>
                <table id="form-table" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nomor</th>
                            <td><input type="text" class="form-control" value="0031.SPBJ/DAN.01.02/D06040000/2022"></td>
                        </tr>
                        <tr>
                            <th>Nomor Dokumen</th>
                            <td><input type="date" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Posting Date</th>
                            <td><input type="text" class="form-control" value="KSO PT TAWAKAL KARYA TEKNIK - PT MAISYARA SALSABILLA ABADI"></td>
                        </tr>
                        <tr>
                            <th>Rupiah Hitung PFK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger me-2" type="button" data-bs-target="#modal-1" data-bs-toggle="modal"><i class="bi bi-trash-fill"></i> Hapus Monitoring PFK</button>
                    <button class="btn btn-white ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td rowspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">:</td>
                                <td colspan="6" style="font-weight: bold;background: var(--bs-table-striped-bg);">Data Niaga (AP2T)</td>
                                <td colspan="9" style="font-weight: bold;background: var(--bs-table-striped-bg);">Data Distribusi / Konstruksi</td>
                                <td colspan="8" style="font-weight: bold;background: var(--bs-table-striped-bg);">Jurnal Reklas</td>
                                <td rowspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">Saldo PFK</td>
                                <td rowspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">Sumber Dana</td>
                                <td rowspan="4" style="font-weight: bold;background: var(--bs-table-striped-bg);">Terbayar/ Belum Terbayar</td>
                                <td colspan="2" style="background: var(--bs-table-striped-bg);font-weight: bold;">Masa Berlaku Kontrak</td>
                            </tr>
                            <tr>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Nomor Agenda</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">ID Pel</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Nama Pelanggan</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Alamat Pelanggan</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Jenis Pekerjaan</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Rupiah PFK</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Nama Pelaksana Pekerjaan (vendor)</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Nomor SPK</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Nomor Slip</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Material</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Quantity</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Rupiah Beban Jasa</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Rupiah Beban Material</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Proses Tagihan</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Tgl. Pembayaran</td>
                                <td colspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Beban Pemakaian Material</td>
                                <td colspan="5" style="background: var(--bs-table-striped-bg);font-weight: bold;">Beban Jasa dan Pendapatan/Beban PFK</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Awal Kontrak</td>
                                <td rowspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Akhir Kontrak</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nomor Dokumen</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Posting Date</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Jumlah</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nomor Dokumen</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Posting Date</td>
                                <td colspan="3" style="background: var(--bs-table-striped-bg);font-weight: bold;">Jumlah</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Beban Jasa</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Beban PFK</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Pendapatan PFK</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562112312665</td>
                                <td>NON-LPG</td>
                                <td>Ferry Hariabeta<br></td>
                                <td>Jl.Cempaka Putih Gang III NO.16 RT 05/04</td>
                                <td>Pindah Meter</td>
                                <td>326,364</td>
                                <td>PT GLOBAL TEKNO INDONESIA - PT BARAYA SUKSES MAKMUR (KSO)</td>
                                <td>0024.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>326,364</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                <td>541300562112312665</td>
                                <td>NON-LPG</td>
                                <td>ANDI RACHMAN</td>
                                <td>JL.CEMPAKA 4 NO.4 RT 01/02</td>
                                <td>Pindah Meter</td>
                                <td>359,000</td>
                                <td>PT GLOBAL TEKNO INDONESIA - PT BARAYA SUKSES MAKMUR (KSO)</td>
                                <td>0024.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>359,000</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562112312654</td>
                                <td>541300049389</td>
                                <td>ARIEF R</td>
                                <td>JL. PEMUDA III/30 RT 13 RW 2</td>
                                <td>Pindah Meter</td>
                                <td>326,362</td>
                                <td>PT TIARA RIFKI FIRANTI</td>
                                <td>0021.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>326,364</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562201042845</td>
                                <td>NON-PLG</td>
                                <td>SUDARTO</td>
                                <td>JL. PUALAM VI/149 A BLK F RT 17/2</td>
                                <td>Pindah Meter</td>
                                <td>326,264</td>
                                <td>PT GLOBAL TEKNO INDONESIA - PT BARAYA SUKSES MAKMUR (KSO)</td>
                                <td>0024.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>326,364</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562201042850</td>
                                <td>541101687990</td>
                                <td>UDIN</td>
                                <td>KP BARU RT 003/09</td>
                                <td>Pindah Meter</td>
                                <td>378,182</td>
                                <td>PT GLOBAL TEKNO INDONESIA - PT BARAYA SUKSES MAKMUR (KSO)</td>
                                <td>0024.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>378,182</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562201062935</td>
                                <td>541101124016</td>
                                <td>ADIWATI SOETJIPTO SH</td>
                                <td>JL PANGKASEM GGG CPT RT 14 RW 1</td>
                                <td>Pindah Meter</td>
                                <td>236,264</td>
                                <td>PT TABEA BERSINAR ABADI</td>
                                <td>0023.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>326,264</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562201072985</td>
                                <td>NON-PLG</td>
                                <td>ELZA</td>
                                <td>JALAN PULO ASEM UTARA I</td>
                                <td>Pindah Tiang</td>
                                <td>5,579,484</td>
                                <td>PT. AHLI BANGUN SEJAHTERA</td>
                                <td>0022.SPBJ/DAN.01.03/C06040000/2022</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>100029970</td>
                                <td>20/12/2022</td>
                                <td>-</td>
                                <td>5,579,484</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/monitoring-pfk/show/1/sub/1">Edit</a>
                                </td>
                                
                                <td>541300562201052895</td>
                                <td>NON-PLG</td>
                                <td>DANANG JOKO MURDONO SS</td>
                                <td>JL PAHAT NO 16 RT 004/04</td>
                                <td>Pindah Meter</td>
                                <td>326,364</td>
                                <td>PT TABEA BERSINAR ABADI</td>
                                <td>0023.SPBJ/DAN.01.03/C06040000/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>326,364</td>
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