<div class="modal fade" id="ubah-foto-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Foto</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('profile.photo') }}" method="POST" enctype="multipart/form-data" id="form-import">
                @csrf
                <div class="modal-body">
                    <div class="mb-0">
                        <label for="formFile" class="form-label">Pilih File</label>
                        <input class="form-control" name="image" accept=".png, .jpeg, .jpg" type="file" id="file">
                        <span class="text-danger d-none" id="image-error">Pilih foto yang valid</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-white" type="button" data-bs-dismiss="modal" id="btn-import-cancel">Batal</button>
                    <button class="btn btn-success" type="submit" id="btn-save">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>