@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Jenis Toko</h3>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-block">
            <table id="dataTables" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Batas Produk</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jenis_toko as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->nama }}</td>
                  <td>
                    @if ($value->batas_produk)
                      <form id="form{{ $value->id_jenis_toko }}" action="{{ base_url('admin/jenisToko/update/' . $value->id_jenis_toko) }}" method="post">
                        <input type="text" name="batas_produk" value="{{ $value->batas_produk }}" class="form-control" />
                      </form>
                    @else
                      Tidak Terbatas
                    @endif
                  </td>
                  <td>
                    @if ($value->batas_produk)
                      <button type="submit" form="form{{ $value->id_jenis_toko }}" class="btn btn-sm btn-warning">Edit</button>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: 150px; ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Info Toko</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-content">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
<script type="text/javascript">
function openModal(id) {
  $.ajax({
    url:"{{ base_url('admin/toko/get/') }}"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}
$(document).ready(function() {
  $('#dataTables').DataTable();
});
</script>
@endsection
