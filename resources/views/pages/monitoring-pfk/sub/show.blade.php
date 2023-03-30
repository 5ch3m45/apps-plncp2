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
                            <td><input readonly type="text" class="form-control" value="0031.SPBJ/DAN.01.02/D06040000/2022"></td>
                        </tr>
                        <tr>
                            <th>Nomor Dokumen</th>
                            <td><input readonly type="date" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Posting Date</th>
                            <td><input readonly type="text" class="form-control" value="KSO PT TAWAKAL KARYA TEKNIK - PT MAISYARA SALSABILLA ABADI"></td>
                        </tr>
                        <tr>
                            <th>Rupiah Hitung PFK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input readonly class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Data Niaga (AP2T)</h5>
                <table id="form-table" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nomor Agenda</th>
                            <td><input type="text" class="form-control" value="541300562112312665"></td>
                        </tr>
                        <tr>
                            <th>ID Pel</th>
                            <td><input type="text" class="form-control" value="NON-LPG"></td>
                        </tr>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <td><input type="text" class="form-control" value="Ferry Hariabeta"></td>
                        </tr>
                        <tr>
                            <th>Alamat Pelanggal</th>
                            <td>
                                <textarea name="" id="" rows="3" class="form-control">Jl.Cempaka Putih Gang III NO.16 RT 05/04</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Pekerjaan</th>
                            <td><input type="text" class="form-control" value="Pindah Meter"></td>
                        </tr>
                        <tr>
                            <th>Rupiah PFK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="326364"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-white btn-sm ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary btn-sm ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Data Distribusi/ Konstruksi</h5>
                <table id="form-table" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama Pelaksana Pekerjaan (Vendor)</th>
                            <td>
                                <textarea name="" id="" rows="3" class="form-control">PT GLOBAL TEKNO INDONESIA - PT BARAYA SUKSES MAKMUR (KSO)</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Nomor SPK</th>
                            <td><input type="text" class="form-control" value="0024.SPBJ/DAN.01.03/C06040000/2021	"></td>
                        </tr>
                        <tr>
                            <th>Nomor Slip</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Material</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td><input type="number" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Rupiah Beban Jasa</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Rupiah Beban Material</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Proses Tagihan</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pembayaran</th>
                            <td><input type="date" class="form-control" value=""></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-white btn-sm ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary btn-sm ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Jurnal Reklas</h5>
                <table id="form-table" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th colspan="2">
                                Beban Pemakaian Material
                            </th>
                        </tr>
                        <tr>
                            <th>Nomor Dokumen</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Posting Date</th>
                            <td><input type="date" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                Beban Jasa dan Pendapatan/Beban PFK
                            </th>
                        </tr>
                        <tr>
                            <th>Nomor Dokumen</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Posting Date</th>
                            <td><input type="date" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Jumlah Beban Jasa</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Jumlah Beban PFK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Jumlah Pendapatan PFK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-white btn-sm ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary btn-sm ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <table id="form-table" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Saldo PFK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="326364"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Sumber Dana</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Terbayar/Belum Terbayar</th>
                            <td><input type="text" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th colspan="2">Masa Berlaku Kontrak</th>
                        </tr>
                        <tr>
                            <th>Awal Kontrak</th>
                            <td><input type="date" class="form-control" value=""></td>
                        </tr>
                        <tr>
                            <th>Akhir Kontrak</th>
                            <td><input type="date" class="form-control" value=""></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-white btn-sm ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary btn-sm ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection