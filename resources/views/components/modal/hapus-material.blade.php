<div class="modal fade" id="hapus-material-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Material</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hapus material {{ $material->material_description }}?
            </div>
            <div class="modal-footer">
                <button class="btn btn-white" type="button" data-bs-dismiss="modal">Batal</button>
                <form method="POST" action="{{ route('material.delete', $material) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button>  
                </form>
            </div>
        </div>
    </div>
</div>