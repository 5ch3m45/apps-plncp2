@extends('layouts.app')

@section('title') Detail Kartu PDP @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-medical"></i> Detail Kartu PDP</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('kartu-pdp.index') }}">Kartu PDP</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data->spk_number }}</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Informasi Kartu PDP</h5>
                @if (session('message'))
                    <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
                @endif
                <form method="POST" action="{{ route('kartu-pdp.update',$data->id) }}">
                    @csrf
                    <table id="form-table" class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nomor SPK</th>
                                <td>
                                    <input type="text" name="nomor_spk"
                                        class="form-control @error('nomor_spk') is-invalid @enderror" value="{{ $data->spk_number }}">
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
                                        class="form-control @error('tanggal_spk') is-invalid @enderror" value="{{ $data->spk_date }}">
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
                                        class="form-control @error('nama_rekanan') is-invalid @enderror" value="{{ $data->vendor_name }}">
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
                                            type="text" value="{{ $data->spk_value }}">
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
                                        name="pekerjaan" value="{{ $data->work }}">
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
                                        name="nomor_bastp" value="{{ $data->bastp_number }}">
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
                                        name="tanggal_awal_kontrak" value="{{ $data->contract_start_date }}">
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
                                        name="tanggal_akhir_kontrak" value="{{ $data->contract_end_date }}">
                                    @error('tanggal_akhir_kontrak')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Total PDP</th>
                                <td>
                                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" readonly id="total" value="0"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-danger me-2" type="button" data-bs-target="#hapus-kartu-pdp-modal" data-bs-toggle="modal"><i class="bi bi-trash-fill"></i> Hapus PDP</button>
                        @if ($data->is_arsip == 0)
                            <button class="btn btn-warning me-2" type="button" onclick="location.href='{{ route('kartu-pdp.archive',$data->id) }}'"><i class="bi bi-archive-fill"></i> Arsipkan PDP</button>
                        @endif
                        <button class="btn btn-white me-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                        <button class="btn btn-primary" type="submit"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">CJ70</h5>
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">#</td>
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
                            @php
                                $total = 0;
                            @endphp
                            @forelse ($data->cj70 as $cj70)
                                @foreach ($cj70->materials as $value)
                                    @php
                                        $total += $value->job_value + $value->capitalized_auc + $value->overhead_value;
                                    @endphp
                                    <tr>
                                        <td><a href="{{ route('cj70.show',$cj70->id) }}">Detail</a><span>&nbsp;|&nbsp;</span><a class="link-danger btn-hapus" data-url="{{ route('cj70.destroy.material',$value->id) }}" href="#" data-bs-target="#hapus-cj70-modal" data-bs-toggle="modal">Hapus</a></td>
                                        <td>{{ $cj70->cost_element }}</td>
                                        <td>{{ $value->master_asset }}</td>
                                        <td>{{ $cj70->wbs_element }}</td>
                                        <td>{{ $value->material ? $value->material->code : '-' }}</td>
                                        <td>{{ $value->material ? $value->material->material_description : '-' }}</td>
                                        <td>{{ $value->substation }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->feeder }}</td>
                                        <td>{{ $value->qty }}</td>
                                        <td>{{ $value->material ? $value->material->base_unit_of_measure : '-' }}</td>
                                        <td>{{ local_number($value->job_value) }}</td>
                                        <td>{{ $value->capitalized_auc > 0 ? $cj70->ref_doc_number : '-' }}</td>
                                        <td>{{ $value->capitalized_auc > 0 ? local_number($value->capitalized_auc) : '-' }}</td>
                                        <td>{{ $value->capitalized_auc < 0 ? $cj70->ref_doc_number : '-' }}</td>
                                        <td>{{ $value->capitalized_auc < 0 ? local_number($value->capitalized_auc) : '-' }}</td>
                                        <td>{{ local_number($value->overhead_value) }}</td>
                                        <td>{{ local_number($value->job_value + $value->capitalized_auc + $value->overhead_value) }}</td>
                                    </tr>  
                                @endforeach                              
                            @empty
                                <tr>
                                    <td colspan="18" class="text-center">Data kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-modal.hapus-kartu-pdp url="{{ route('kartu-pdp.destroy',$data->id) }}" cj70="{{ count($data->cj70) }}" />
        <x-modal.hapus-cj70 />
@endsection
@section('js')
    <script>
        $('#total').val('{{ local_number($total) }}');
        $(document).on("click", ".btn-hapus", function(){
            var url = $(this).data('url');
            $('#action-hapus').html(`
                <button class="btn btn-danger" type="button" onclick="location.href='${url}'">Hapus</button>
            `);
        });
    </script>
@endsection