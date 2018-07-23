@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Level</h3>
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
            <a href="{{ base_url('/admin/level/create')}}" class="btn btn-outline-success"><i class="mdi mdi-plus"></i>Tambah Level</a>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="myTable">
                <thead class="thead-default">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($level as $key => $row)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>
                      <button type="button" onclick="window.location='{{ base_url('admin/level/edit/' . $row->id_level) }}'" class="btn btn-sm btn-warning">Ubah</button>
                      <button type="button" onclick="window.location='{{ base_url('admin/level/delete/' . $row->id_level) }}'" class="btn btn-sm btn-danger">Hapus</button>
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
  </div>
  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
  $('#myTable').dataTable();
});
</script>
@endsection
