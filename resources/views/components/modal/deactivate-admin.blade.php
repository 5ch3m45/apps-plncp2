<div class="modal fade" id="deactivate-admin-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nonaktifkan Admin</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.deactive', ['user' => $user]) }}" method="POST" enctype="multipart/form-data" id="form-import">
                @csrf
                <div class="modal-body">
                    <p>Anda yakin menonaktifkan admin {{ $user->name }}?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-white" type="button" data-bs-dismiss="modal" id="btn-import-cancel">Batal</button>
                    <button class="btn btn-danger" type="submit" id="btn-import">Nonaktifkan</button>
                </div>
            </form>
        </div>
    </div>
</div>