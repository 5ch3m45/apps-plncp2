@extends('layouts.app')

@section('title') Detail Material @endsection

@section('content')
    <div>
        <h3><i class="bi bi-wrench-adjustable-circle"></i> Detail Material</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('material.index') }}">Material</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $material->material_description }}</li>
            </ol>
        </nav>
        @if (session('message'))
            <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('material.update', $material) }}">
                    @csrf
                    <div class="table-responsive mb-2">
                        <table id="table-form" class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 20%">Material</th>
                                    <td><input type="text" class="form-control" name="code" value="{{ $material->code }}"></td>
                                </tr>
                                <tr>
                                    <th>Material Description</th>
                                    <td><input type="text" class="form-control" name="material_description" value="{{ $material->material_description }}"></td>
                                </tr>
                                <tr>
                                    <th>Material Group</th>
                                    <td><input type="text" class="form-control" name="material_group" value="{{ $material->material_group }}"></td>
                                </tr>
                                <tr>
                                    <th>Base Unit of Measure</th>
                                    <td><input type="text" class="form-control" name="base_unit_of_measure" value="{{ $material->base_unit_of_measure }}"></td>
                                </tr>
                                <tr>
                                    <th>Unrestricted Use Stock</th>
                                    <td><input type="text" class="form-control" name="unrestricted_use_stock" value="{{ $material->unrestricted_use_stock }}"></td>
                                </tr>
                                <tr>
                                    <th>Quality Inspection Stock</th>
                                    <td><input type="text" class="form-control" name="quality_inspection_stock" value="{{ $material->quality_inspection_stock }}"></td>
                                </tr>
                                <tr>
                                    <th>Blocked Stock</th>
                                    <td><input type="text" class="form-control" name="blocked_stock" value="{{ $material->blocked_stock }}"></td>
                                </tr>
                                <tr>
                                    <th>In Transit Stock</th>
                                    <td><input type="text" class="form-control" name="in_transit_stock" value="{{ $material->in_transit_stock }}"></td>
                                </tr>
                                <tr>
                                    <th>Valuation Class</th>
                                    <td><input type="text" class="form-control" name="valuation_class" value="{{ $material->valuation_class }}"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#hapus-material-modal"><i class="bi bi-trash"></i> Hapus</button>
                        <div>
                            <button class="btn btn-white btn-sm ms-2" type="reset"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                            <button class="btn btn-primary btn-sm ms-2" type="submit"><i class="bi bi-cloud-arrow-up-fill"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-modal.hapus-material :material="$material"/>
@endsection