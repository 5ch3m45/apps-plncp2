<div class="modal fade" id="hapus-kartu-pdp-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Kartu PDP</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($cj70 > 0)
                    <p>Tidak dapat menghapus Kartu PDP ini karena masih ada CJ70.</p>
                @else
                    <p> <i class="bi bi-exclamation-triangle-fill text-danger"></i> Data yang dihapus tidak dapat dikembalikan</p>
                @endif
            </div>
            <div class="modal-footer">
                <button class="btn btn-white" type="button" data-bs-dismiss="modal">Batal</button>
                @if ($cj70 == 0)
                    <form method="POST" action="{{ $url }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>