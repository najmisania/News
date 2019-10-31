<!-- Modal -->
<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin ingin menghapus berita ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        {{-- <button type="button"  class="btn btn-primary">Hapus</button> --}}
        <a href="/history/hapus/{{ $brt->id }}" class=" btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>