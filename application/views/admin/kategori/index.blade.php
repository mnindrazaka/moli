@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Kategori</h3>
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
            <a href="{{ base_url('/admin/kategori/create')}}" class="btn btn-outline-success"><i class="mdi mdi-plus"></i>Tambah Kategori</a>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <table id="dataTables" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategori as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->nama }}</td>
                  <td>
                    <a href="{{ base_url('/admin/kategori/edit/') . $value->id_kategori }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ base_url('/admin/kategori/delete/') . $value->id_kategori }}" class="btn btn-sm btn-danger">Delete</a>
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
