@extends('layouts.app')

@section('title') Edit CJ70 @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-ruled"></i> Edit CJ70</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item">CJ70</li>
                <li class="breadcrumb-item active" aria-current="page">Edit CJ70</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                @if (session('message'))
                    <x-alert message="{{ session('message') }}" level="{{ session('level') }}" />
                @endif
                <form method="POST" action="{{ route('cj70.update',$data->id) }}">
                    @csrf
                    <div class="table-responsive mb-2">
                        <table id="table-form" class="table">
                            <tbody>
                                <tr>
                                    <th width="20%">Nomor SPK</th>
                                    <td>
                                        <select class="form-control select2 w-100" name="nomor_spk">
                                            <option value="" selected="">Pilih SPK</option>
                                            @foreach ($spk as $value)
                                                <option value="{{ $value->id }}" @if ($value->id == $data->pdp_card_id)
                                                    selected
                                                @endif>{{ $value->spk_number }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nomor TUG</th>
                                    <td><input type="text" class="form-control" name="nomor_tug" value="{{ $data->ref_doc_number }}"></td>
                                </tr>
                                <tr>
                                    <th>GL Account</th>
                                    <td><input type="text" class="form-control" name="gl_account" value="{{ $data->cost_element }}"></td>
                                </tr>
                                <tr>
                                    <th>Nomor WBS</th>
                                    <td><input type="text" class="form-control" name="nomor_wbs" value="{{ $data->wbs_element }}"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="mb-2">Material</h5>
                    <div class="table-responsive mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);" class="text-center">#</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Master Asset</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">No. Material / Nama Pekerjaan Material</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Gardu</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Alamat</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Penyulang</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Quantity</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Satuan</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Pekerjaan</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Material</td>
                                    <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nilai Overhead</td>
                                </tr>
                            </thead>
                            <tbody id="dynamic_form">
                                @foreach ($data->materials as $key => $value)
                                    <tr @if($key > 0) class="new-form" @endif>
                                        @if ($key == 0)
                                            <td class="text-center"><a href="#" class="btn btn-primary btn-sm btn-tambah"><i class="bi bi-plus"></i> Tambah</a></td>
                                        @else
                                            <td class="text-center"><a class="btn btn-danger btn-sm btn-hapus" data-id="{{ $value->id }}" data-bs-target="#hapus-material-modal" data-bs-toggle="modal" href="#"><i class="bi-trash-fill"></i> Hapus</a></td>
                                        @endif
                                        <td>
                                            <input type="hidden" class="form-control" name="cj70_material[]" value="{{ $value->id }}" style="width: 100px;">
                                            <input type="text" class="form-control" name="master_asset[]" value="{{ $value->master_asset }}" style="width: 100px;"></td>
                                        <td>
                                            <select class="form-control material select2 w-100" name="material[]" style="width: 150px;">
                                                <option value="{{ $value->material_id }}" selected>{{ $value->material ? $value->material->code .' - '.$value->material->material_description : '' }}</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" name="gardu[]" value="{{ $value->substation }}" style="width: 50px;"></td>
                                        <td><input type="text" class="form-control" name="alamat[]" value="{{ $value->address }}" style="width: 300px;"></td>
                                        <td><input type="text" class="form-control" name="penyulang[]" value="{{ $value->feeder }}" style="width: 80px;"></td>
                                        <td><input type="number" class="form-control" name="qty[]" value="{{ $value->qty }}" style="width: 70px;"></td>
                                        <td><input type="text" class="form-control bg-white satuan" value="{{ $value->material ? $value->material->base_unit_of_measure : '' }}" readonly style="width: 50px;"></td>
                                        <td><input type="text" class="form-control numbering" name="nilai_pekerjaan[]" value="{{ $value->job_value }}" style="width: 100px;"></td>
                                        <td><input type="text" class="form-control numbering" name="nilai_material[]" value="{{ $value->rem_val_cnt_cur }}" style="width: 100px;"></td>
                                        <td><input type="text" class="form-control numbering" name="nilai_overhead[]" value="{{ $value->overhead_value }}" style="width: 100px;"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-white btn-sm ms-2" type="button"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                        <button class="btn btn-primary btn-sm ms-2" type="submit"><i class="bi bi-cloud-arrow-up-fill"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hapus-material-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Material</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data yang dihapus tidak dapat dikembalikan</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-white" type="button" data-bs-dismiss="modal">Batal</button>
                    <div id="action-hapus"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        InitializeInput();
        function InitializeInput(){
            const numeralMask = document.querySelectorAll('.numbering');
            if (numeralMask.length) {
                numeralMask.forEach(e => {
                    new Cleave(e, {
                        numeral: true,
                        numeralDecimalMark: ',',
                        numeralDecimalScale: 0,
                        delimiter: '.'
                    });
                });
            }
            $(".material").select2({
                ajax: {
                    url: "{{ route('cj70.material') }}",
                    dataType: 'json',
                    delay: 250,
                    type: 'GET',
                    data: function (params) {
                        return {
                            code: params.term, // search term
                        };
                    },
                    processResults: function (data) {
                        var arr = []
                        $.each(data, function (index, value) {
                            arr.push({
                                id: value.id,
                                text: value.code + ' - ' + value.material_description,
                                name: value.material_description,
                                unit: value.base_unit_of_measure,
                            })
                        })
                        return {
                            results: arr
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) { return markup; },
                minimumInputLength: 1,
                language: {
                    inputTooShort: function() {
                        return 'Masukkan 1 karakter atau lebih';
                    }
                }
            }).on("select2:select", function(e) { 
                $(this).parent().parent().children().children('.nama_material').val(e.params.data.name);
                $(this).parent().parent().children().children('.satuan').val(e.params.data.unit);
            });
        };

        function addForm(){
            $("#dynamic_form").append(`
                <tr class="new-form">
                    <td class="text-center"><a class="btn btn-danger btn-sm btn-hapus" href="#"><i class="bi-trash-fill"></i> Hapus</a></td>
                    <td>
                        <input type="hidden" class="form-control" name="cj70_material[]" value="" style="width: 100px;">
                        <input type="text" class="form-control" name="master_asset[]" style="width: 100px;"></td>
                    <td>
                        <select class="form-control material select2-form w-100" name="material[]" style="width: 150px;">
                            <option value="" selected="">Pilih No. Material</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control" name="gardu[]" style="width: 50px;"></td>
                    <td><input type="text" class="form-control" name="alamat[]" style="width: 300px;"></td>
                    <td><input type="text" class="form-control" name="penyulang[]" style="width: 80px;"></td>
                    <td><input type="number" class="form-control" name="qty[]" style="width: 70px;"></td>
                    <td><input type="text" class="form-control bg-white satuan" readonly style="width: 50px;"></td>
                    <td><input type="text" class="form-control numbering" name="nilai_pekerjaan[]" style="width: 100px;"></td>
                    <td><input type="text" class="form-control numbering" name="nilai_material[]" style="width: 100px;"></td>
                    <td><input type="text" class="form-control numbering" name="nilai_overhead[]" style="width: 100px;"></td>
                </tr>
            `);
            $('.select2-form').select2();
            InitializeInput();
        }

        $("#dynamic_form").on("click", ".btn-tambah", function(){
            addForm()
        })

        $("#dynamic_form").on("click", ".btn-hapus", function(){
            var id = $(this).data('id');
            if(id){
                var url = '{{ url("cj70/delete/material") }}/'+id;
                $('#action-hapus').html(`
                    <button class="btn btn-danger" type="button" onclick="location.href='${url}'">Hapus</button>
                `);
            }else{
                $(this).parent().parent('.new-form').remove();
            }
        });
    </script>
@endsection