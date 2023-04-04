@extends('layouts.app')

@section('title') CJ70 @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-ruled"></i> CJ70</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">CJ70</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5>Filter</h5>
                <form class="row" action="{{ route('cj70.index') }}" method="GET" id="form-search">
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label class="form-label">Cari</label>
                        <input type="text" name="search" class="form-control" id="search" placeholder="Cari" value="{{ request()->search }}">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label class="form-label">Berdasarkan</label>
                        <select name="type" class="form-control"id="type">
                            <option @if(request()->type == 'ref_doc_number') selected @endif value="ref_doc_number">Ref Document Number</option>
                            <option @if(request()->type == 'reservation') selected @endif value="reservation">Reservation</option>
                            <option @if(request()->type == 'cost_element') selected @endif value="cost_element">Cost Element</option>
                            <option @if(request()->type == 'period') selected @endif value="period">Period</option>
                            <option @if(request()->type == 'posting_date') selected @endif value="posting_date">Posting Date</option>
                            <option @if(request()->type == 'rem_val_cnt_cur') selected @endif value="rem_val_cnt_cur">Rem.val.cnt.cur.</option>
                            <option @if(request()->type == 'qty') selected @endif value="qty">Total quantity</option>
                            <option @if(request()->type == 'doc_header_text') selected @endif value="doc_header_text">Document Header Text</option>
                            <option @if(request()->type == 'unloading_point') selected @endif value="unloading_point">Unloading Point</option>
                            <option @if(request()->type == 'capitalized_auc') selected @endif value="capitalized_auc">Capitalized to AuC</option>
                            <option @if(request()->type == 'name') selected @endif value="name">Name</option>
                            <option @if(request()->type == 'vendor') selected @endif value="vendor">Vendor</option>
                            <option @if(request()->type == 'vendor_name') selected @endif value="vendor_name">Vendor Name</option>
                            <option @if(request()->type == 'material_description') selected @endif value="material_description">Material Description</option>
                            <option @if(request()->type == 'material') selected @endif value="material">Material</option>
                            <option @if(request()->type == 'wbs_element') selected @endif value="wbs_element">WBS Element</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div>
                            <label class="form-label">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"><i class="bi bi-search"></i> Cari</button>
                        <button type="button" class="btn btn-danger me-2" id="btn-reset"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                        <a href="/cj70/create">
                            <button type="button" class="btn btn-success me-2">+ Baru</button>
                        </a>
                        <button type="button" class="btn btn-success me-2" data-bs-target="#import-cj70-modal" data-bs-toggle="modal"><i class="bi bi-cloud-arrow-up-fill"></i> Import</button>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">#</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Ref Document Number</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Reservation</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Cost Element</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Period</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Posting Date</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Rem.val.cnt.cur.</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Total quantity</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Document Header Text</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Unloading Point</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Capitalized to AuC</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Name</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Vendor</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Vendor Name</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material Description</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">WBS Element</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $value)
                                <tr>
                                    <td>
                                        <a href="/cj70/show/1">Detail</a>
                                    </td>
                                    <td>{{ $value->ref_doc_number }}</td>
                                    <td>{{ $value->reservation }}</td>
                                    <td>{{ $value->cost_element }}</td>
                                    <td>{{ $value->period }}</td>
                                    <td>{{ date('d/m/Y',strtotime($value->posting_date)) }}</td>
                                    <td>{{ $value->rem_val_cnt_cur }}</td>
                                    <td>{{ $value->qty }}</td>
                                    <td>{{ $value->doc_header_text }}</td>
                                    <td>{{ $value->unloading_point }}</td>
                                    <td>{{ $value->capitalized_auc }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->vendor }}</td>
                                    <td>{{ $value->vendor_name }}</td>
                                    <td>{{ $value->material }}</td>
                                    <td>{{ $value->material_description }}</td>
                                    <td>{{ $value->wbs_element }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="17" class="text-center">Data masih kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $data->render("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>

    <x-modal.import-cj70/>
@endsection

@section('js')
<script>
    $('#btn-reset').click(function(){
        $('#search').val('');
        $('#type').val('ref_doc_number');
        $('#form-search').submit();
    });
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