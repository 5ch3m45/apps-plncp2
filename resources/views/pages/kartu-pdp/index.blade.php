@extends('layouts.app')

@section('title') Kartu PDP @endsection

@section('content')
    <div>
        <div class="d-flex justify-content-between">
            <div>
                <h3><i class="bi bi-file-earmark-medical"></i> @if($is_arsip) Arsip @endif Kartu PDP</h3>
            </div>
            @if($is_arsip)
            <a href="{{ route('kartu-pdp.index') }}">
                <button class="btn btn-primary my-auto"><i class="bi bi-archive-fill"></i> Lihat Kartu PDP Aktif</button>
            </a>
            @else
            <a href="{{ route('kartu-pdp.index') }}?arsip=1">
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
                <form class="row" action="{{ route('kartu-pdp.index') }}" method="GET" id="form-search">
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Cari</label>
                        <input type="text" name="search" id="search" class="form-control" placeholder="Cari">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Berdasarkan</label>
                        <select name="type" class="form-control" id="type">
                            <option @if(request()->type == 'spk_number') selected @endif value="spk_number">Nomor SPK</option>
                            <option @if(request()->type == 'spk_date') selected @endif value="spk_date">Tanggal SPK</option>
                            <option @if(request()->type == 'spk_value') selected @endif value="spk_value">Nilai SPK</option>
                            <option @if(request()->type == 'vendor_name') selected @endif value="vendor_name">Nama Rekanan</option>
                            <option @if(request()->type == 'work') selected @endif value="work">Pekerjaan</option>
                            <option @if(request()->type == 'bastp_number') selected @endif value="bastp_number">Nomor BASTP</option>
                            <option @if(request()->type == 'contract_start_date') selected @endif value="contract_start_date">Tgl Awal Kontrak</option>
                            <option @if(request()->type == 'contract_end_date') selected @endif value="contract_end_date">Tgl Awal Kontrak</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <div>
                            <label class="form-label">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"><i class="bi bi-search"></i> Cari</button>
                        <a href="{{ route('kartu-pdp.create') }}">
                            <button type="button" class="btn btn-success">+ Baru</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        @if (session('message'))
            <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
        @endif
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
                            @forelse ($data as $value)
                                <tr>
                                    <td><a href="{{ route('kartu-pdp.show',$value->id) }}">{{ $value->spk_number }}</a></td>
                                    <td>{{ $value->spk_date }}</td>
                                    <td>{{ $value->vendor_name }}</td>
                                    <td>{{ local_number($value->spk_value) }}</td>
                                    <td>{{ $value->work }}</td>
                                    <td>{{ $value->bastp_number }}</td>
                                    <td></td>
                                    <td>{{ $value->contract_start_date }}</td>
                                    <td>{{ $value->contract_end_date }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Data masih kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $data->render("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#type').change(function(){
            $('#search').attr('type','text');
            if(this.value == 'spk_date' || this.value == 'contract_start_date' || this.value == 'contract_end_date'){
                $('#search').attr('type','date');
            }
        });
    </script>
@endsection