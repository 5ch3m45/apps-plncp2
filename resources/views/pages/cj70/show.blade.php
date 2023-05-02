@extends('layouts.app')

@section('title') Detail CJ70 @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-ruled"></i> Detail CJ70</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/cj70">CJ70</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data->ref_doc_number }}</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="form-table" class="table">
                        <tbody>
                            <tr>
                                <th>Nomor SPK</th>
                                <td>: {{ $data->kartu_pdp->spk_number }}</td>
                            </tr>
                            <tr>
                                <th>Nomor TUG</th>
                                <td>: {{ $data->ref_doc_number }}</td>
                            </tr>
                            <tr>
                                <th>GL Account</th>
                                <td>: {{ $data->cost_element }}</td>
                            </tr>
                            <tr>
                                <th>Nomor WBS</th>
                                <td>: {{ $data->wbs_element }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Material</h5>
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">#</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">No. Material</td>
                                <td rowspan="2" style="font-weight: bold;background: var(--bs-table-striped-bg);">Nama Pekerjaan Material</td>
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
                            @foreach ($data->materials as $key => $value)
                                @php
                                    $total += $value->job_value + $value->capitalized_auc + $value->overhead_value;
                                @endphp
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $value->material ? $value->material->code : '-' }}</td>
                                    <td>{{ $value->material ? $value->material->material_description : '-' }}</td>
                                    <td>{{ $value->qty }}</td>
                                    <td>{{ $value->material ? $value->material->base_unit_of_measure : '-' }}</td>
                                    <td>{{ local_number($value->job_value) }}</td>
                                    <td>{{ $value->capitalized_auc > 0 ? $data->ref_doc_number : '-' }}</td>
                                    <td>{{ $value->capitalized_auc > 0 ? local_number($value->capitalized_auc) : '-' }}</td>
                                    <td>{{ $value->capitalized_auc < 0 ? $data->ref_doc_number : '-' }}</td>
                                    <td>{{ $value->capitalized_auc < 0 ? local_number($value->capitalized_auc) : '-' }}</td>
                                    <td>{{ local_number($value->overhead_value) }}</td>
                                    <td>{{ local_number($value->job_value + $value->capitalized_auc + $value->overhead_value) }}</td>
                                </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection