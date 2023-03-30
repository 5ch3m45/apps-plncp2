@extends('layouts.app')

@section('title') Detail Kartu PDP @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-medical"></i> Detail Kartu PDP</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Kartu PDP</a></li>
                <li class="breadcrumb-item active" aria-current="page">0031.SPBJ/DAN.01.02/D06040000/2022</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Informasi Kartu PDP</h5>
                <table id="form-table" class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nomor SPK</th>
                            <td><input type="text" class="form-control" value="0031.SPBJ/DAN.01.02/D06040000/2022"></td>
                        </tr>
                        <tr>
                            <th>Tanggal SPK</th>
                            <td><input type="date" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Nama Rekanan</th>
                            <td><input type="text" class="form-control" value="KSO PT TAWAKAL KARYA TEKNIK - PT MAISYARA SALSABILLA ABADI"></td>
                        </tr>
                        <tr>
                            <th>Nilai SPK</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" value="0"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td><input type="text" class="form-control" value="PENGADAAN JASA REHABILITASI PHB TR KRITIS RAWAN GANGGUAN 16 GARDU DI PLN UP3 CEMPAKA PUTIH"></td>
                        </tr>
                        <tr>
                            <th>Nomor BASTP</th>
                            <td><input type="text" class="form-control" value="0334.BA/DAN.01.02/F06040000/2022 (TERMIN 1-95%)"></td>
                        </tr>
                        <tr>
                            <th>Tgl. Awal Kontrak</th>
                            <td><input type="date" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Tgl. Akhir Kontrak</th>
                            <td><input type="date" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Total PDP</th>
                            <td>
                                <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" readonly type="number" value="0"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger me-2" type="button" data-bs-target="#hapus-kartu-pdp-modal" data-bs-toggle="modal"><i class="bi bi-trash-fill"></i> Hapus PDP</button>
                    <button class="btn btn-warning" type="button"><i class="bi bi-archive-fill"></i> Arsipkan PDP</button>
                    <button class="btn btn-white ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">CJ70</h5>
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">:</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">GL Account</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Master Asset</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">No. WBS</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">No. Material</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nama Pekerjaan Material</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Gardu</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Alamat</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Penyulang</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Quantity</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Satuan</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Pekerjaan (Jasa)</td>
                                <td colspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">TUG 9</td>
                                <td colspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">TUG 10</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Overhead</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Jumlah</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">No. Slip</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">No. Slip</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td><a href="cj70-edit.html">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200<br></td>
                                <td>1000345978</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003260011</td>
                                <td>LVSB;DIST;3P;380V;1600A;8LINE;ID<br></td>
                                <td>PS 35</td>
                                <td>JL. PERINTIS KEMERDEKAAN</td>
                                <td>MOCI</td>
                                <td>1</td>
                                <td>SET</td>
                                <td>-</td>
                                <td>4924867440</td>
                                <td>36,374,700</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>36,374,700<br></td>
                            </tr>
                            <tr>
                                <td><a href="cj70-edit.html">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345979</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003260011</td>
                                <td>LVSB;DIST;3P;380V;1600A;8LINE;ID</td>
                                <td>TP 5N</td>
                                <td>JL. CEMPAKA PUTIH TENGAH</td>
                                <td>MERAH<br></td>
                                <td>1</td>
                                <td>SET</td>
                                <td>-</td>
                                <td>4924867438</td>
                                <td>36,374,700</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>36,374,700</td>
                            </tr>
                            <tr>
                                <td><a href="cj70-edit.html">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345980</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003260011</td>
                                <td>LVSB;DIST;3P;380V;1600A;8LINE;ID</td>
                                <td>TP 60</td>
                                <td>JL. MARDANI SEKOLAHAN</td>
                                <td>WAJIK<br></td>
                                <td>1</td>
                                <td>SET</td>
                                <td>-</td>
                                <td>4924867439</td>
                                <td>36,374,700</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>36,374,700</td>
                            </tr>
                            <tr>
                                <td><a href="cj70-edit.html">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345981</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003260011</td>
                                <td>LVSB;DIST;3P;380V;1600A;8LINE;ID</td>
                                <td>K 95</td>
                                <td>JL. PERCETAKAN NEGARA</td>
                                <td>KUNING<br></td>
                                <td>1</td>
                                <td>SET</td>
                                <td>-</td>
                                <td>4924832772</td>
                                <td>36,374,700</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>36,374,700</td>
                            </tr>
                            <tr>
                                <td><a href="cj70-edit.html">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345981</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003120083</td>
                                <td>CABLE PWR ACC;MECH E ANCHOR 8/0-20mm</td>
                                <td>K 95</td>
                                <td>JL. PERCETAKAN NEGARA</td>
                                <td>KUNING<br></td>
                                <td>4</td>
                                <td></td>
                                <td>-</td>
                                <td>4924832772</td>
                                <td>17,160</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>17,160</td>
                            </tr>
                            <tr>
                                <td><a href="#">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100300</td>
                                <td>1000345982</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003110517</td>
                                <td>CABLE PWR;NYY;1X240mm2;0.6/1kV;Opstig</td>
                                <td>S 21</td>
                                <td>JL. ANGKASA</td>
                                <td>NGAKAK<br></td>
                                <td>50</td>
                                <td>M</td>
                                <td>-</td>
                                <td>4924941765</td>
                                <td>17,157,530</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>17,157,530</td>
                            </tr>
                            <tr>
                                <td><a href="#">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345982</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003260011</td>
                                <td>LVSB;DIST;3P;380V;1600A;8LINE;ID</td>
                                <td>S 21</td>
                                <td>JL. ANGKASA</td>
                                <td>NGAKAK<br></td>
                                <td>1</td>
                                <td>SET</td>
                                <td>-</td>
                                <td>4924871775</td>
                                <td>36,374,700</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>36,374,700</td>
                            </tr>
                            <tr>
                                <td><a href="#">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345978</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003120121</td>
                                <td>CABLE PWR ACC;CABLE SHOE CU 240mm2</td>
                                <td>PS 35</td>
                                <td>JL. PERINTIS KEMERDEKAAN</td>
                                <td>MOCI<br></td>
                                <td>4</td>
                                <td></td>
                                <td>-</td>
                                <td>4924930023</td>
                                <td>781,000</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>781,000</td>
                            </tr>
                            <tr>
                                <td><a href="#">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345978</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003110517</td>
                                <td>CABLE PWR;NYY;1X240mm2;0.6/1kV;Opstig</td>
                                <td>PS 35</td>
                                <td>JL. PERINTIS KEMERDEKAAN</td>
                                <td>MOCI<br></td>
                                <td>14</td>
                                <td>M</td>
                                <td>-</td>
                                <td>4924930023</td>
                                <td>4,804,108</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>4,804,108</td>
                            </tr>
                            <tr>
                                <td><a href="#">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger" href="#" data-bs-target="#modal-2" data-bs-toggle="modal">Hapus</a></td>
                                <td>6106100200</td>
                                <td>1000345983</td>
                                <td>I.5489.22.09.0001.152.11</td>
                                <td>000000003120083</td>
                                <td>CABLE PWR ACC;MECH E ANCHOR 8/0-20mm</td>
                                <td>K 38N</td>
                                <td>JL. KALIBARU TIMUR V</td>
                                <td>KONDANG<br></td>
                                <td>4</td>
                                <td></td>
                                <td>-</td>
                                <td>4924967386</td>
                                <td>17,160</td>
                                <td>-</td>
                                <td>0</td>
                                <td>0</td>
                                <td>17,160</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-modal.hapus-kartu-pdp/>
@endsection