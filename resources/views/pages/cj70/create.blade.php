@extends('layouts.app')

@section('title') Detail CJ70 @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-ruled"></i> Detail CJ70</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/cj70">CJ70</a></li>
                <li class="breadcrumb-item active" aria-current="page">4924867440</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table id="table-form" class="table">
                        <tbody>
                            <tr>
                                <th>Nomor SPK</th>
                                <td><select class="form-control">
                                        <option value="" selected="">Pilih SPK</option>
                                        <option value="1">0031.SPJB/DAN.01.02/D06040000/2022</option>
                                        <option value="13">0032.SPJB/DAN.01.02/D06040000/2022</option>
                                        <option value="14">0033.SPJB/DAN.01.02/D06040000/2022</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <th>GL Account</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Master Asset</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Nomor WBS</th>
                                <td><input type="text" class="form-control">
                                    <div class="input-group"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Nomor Material</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Nama Pekerjaan Material</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Gardu</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><textarea class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Penyulang</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Satuan</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Nilai Pekerjaan Jasa</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="text"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>No. Slip TUG9</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Nilai TUG9</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="text" value="0"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>No. Slip TUG10</th>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Nilai TUG10</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="text" value="0"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Nilai Overhead</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="text" value="0"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="text" value="0"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-white btn-sm ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button class="btn btn-primary btn-sm ms-2" type="button"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection