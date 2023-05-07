@extends('layouts.app')

@section('title') Material Baru @endsection

@section('content')
    <div>
        <h3><i class="bi bi-wrench-adjustable-circle"></i> Material Baru</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('material.index') }}">Material</a></li>
                <li class="breadcrumb-item active" aria-current="page">Material Baru</li>
            </ol>
        </nav>
        @if (session('message'))
            <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('material.store') }}">
                    @csrf
                    <div class="table-responsive mb-2">
                        <table id="table-form" class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 20%">Material Code</th>
                                    <td><input type="text" class="form-control" name="code"></td>
                                    @error('code') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Material Description</th>
                                    <td><input type="text" class="form-control" name="material_description"></td>
                                    @error('material_description') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Material Group</th>
                                    <td><input type="text" class="form-control" name="material_group"></td>
                                    @error('material_group') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Base Unit of Measure</th>
                                    <td><input type="text" class="form-control" name="base_unit_of_measure"></td>
                                    @error('base_unit_of_measure') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Unrestricted Use Stock</th>
                                    <td><input type="number" class="form-control" name="unrestricted_use_stock"></td>
                                    @error('unrestricted_use_stock') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Quality Inspection Stock</th>
                                    <td><input type="number" class="form-control" name="quality_inspection_stock"></td>
                                    @error('quality_inspection_stock') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Blocked Stock</th>
                                    <td><input type="number" class="form-control" name="blocked_stock"></td>
                                    @error('blocked_stock') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>In Transit Stock</th>
                                    <td><input type="number" class="form-control" name="in_transit_stock"></td>
                                    @error('in_transit_stock') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                                <tr>
                                    <th>Valuation Class</th>
                                    <td><input type="text" class="form-control" name="valuation_class"></td>
                                    @error('valuation_class') <div><small class="text-danger">{{ $message }}</small></div> @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-white btn-sm ms-2" type="reset"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                        <button class="btn btn-primary btn-sm ms-2" type="submit"><i class="bi bi-cloud-arrow-up-fill"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection