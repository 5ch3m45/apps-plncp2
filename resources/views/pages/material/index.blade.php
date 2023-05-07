@extends('layouts.app')

@section('title') Material @endsection

@section('content')
    <div>
        <h3><i class="bi bi-wrench-adjustable-circle"></i> Material</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Material</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5>Filter</h5>
                <form class="row" action="{{ route('material.index') }}" method="GET" id="form-search">
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label class="form-label">Cari</label>
                        <input type="text" name="search" class="form-control" id="search" placeholder="Cari" value="{{ request()->search }}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label class="form-label">Berdasarkan</label>
                        <select name="type" class="form-control"id="type">
                            <option @if(request()->type == 'code') selected @endif value="code">Material</option>
                            <option @if(request()->type == 'material_description') selected @endif value="material_description">Material Description</option>
                            <option @if(request()->type == 'material_group') selected @endif value="material_group">Material Group</option>
                            <option @if(request()->type == 'base_unit_of_measure') selected @endif value="base_unit_of_measure">Base Unit of Measure</option>
                            <option @if(request()->type == 'valuation_class') selected @endif value="valuation_class">Valuation Class</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <div>
                            <label class="form-label">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"><i class="bi bi-search"></i> Cari</button>
                        <a href="{{ route('material.index') }}">
                            <button type="button" class="btn btn-white me-2"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                        </a>
                        <a href="{{ route('material.create') }}">
                            <button type="button" class="btn btn-success me-2">+ Baru</button>
                        </a>
                        <button type="button" class="btn btn-success me-2" data-bs-target="#import-material-modal" data-bs-toggle="modal"><i class="bi bi-cloud-arrow-up-fill"></i> Import</button>
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
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">#</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material Description</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material Group</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Base Unit of Measure</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Unrestricted Use Stock</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Quality Inspection Stock</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Blocked Stock</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">In Transit Stock</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Valuation Class</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $value)
                                <tr>
                                    <td>
                                        <a href="/material/show/{{ $value->id }}">Detail</a>
                                    </td>
                                    <td>{{ $value->code }}</td>
                                    <td>{{ $value->material_description }}</td>
                                    <td>{{ $value->material_group }}</td>
                                    <td>{{ $value->base_unit_of_measure }}</td>
                                    <td>{{ $value->unrestricted_use_stock }}</td>
                                    <td>{{ $value->quality_inspection_stock }}</td>
                                    <td>{{ $value->blocked_stock }}</td>
                                    <td>{{ $value->in_transit_stock }}</td>
                                    <td>{{ $value->valuation_class }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">Data masih kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $data->render("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>

    <x-modal.import-material/>
@endsection

@section('js')
<script>
    $('#btn-import-cancel').click(function(){
        $('#file').val('');
        $('#file-error').addClass('d-none');
    });
    $('#btn-import').click(function(){
        var file = $('#file').val();
        $('#file-error').addClass('d-none');
        if(!file){
            $('#file-error').removeClass('d-none');
            return;
        }
        $('#form-import').submit();
    });
</script>
@endsection