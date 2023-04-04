<div class="modal fade" id="import-cj70-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import CJ70</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('cj70.import') }}" method="POST" enctype="multipart/form-data" id="form-import">
                @csrf
                <div class="modal-body">
                    <div class="mb-0">
                        <label for="formFile" class="form-label">Pilih File</label>
                        <input class="form-control" name="file" accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" type="file" id="file">
                        <span class="text-danger d-none" id="file-error">File masih kosong</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-white" type="button" data-bs-dismiss="modal" id="btn-import-cancel">Batal</button>
                    <button class="btn btn-success" type="button" id="btn-import">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>