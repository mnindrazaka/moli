@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Toko</h3>
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
            <h4 class="card-title"><a href="{{ base_url('/admin/toko/create')}}" class="btn btn-success"><i class="mdi mdi-plus"></i>Tambah Toko</a></h4>
            <table id="dataTables" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Telepon</th>
                  <th>Kota</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($toko as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->nama }}</td>
                  <td>{{ $value->telp }}</td>
                  <td>{{ $value->kota }}</td>
                  <td>
                    <a href="{{ base_url('/admin/toko/edit/') . $value->id_toko }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ base_url('/admin/toko/delete/') . $value->id_toko }}" class="btn btn-sm btn-danger">Delete</a>
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

  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection
