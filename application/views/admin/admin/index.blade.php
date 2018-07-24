@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Admin</h3>
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
            <a href="{{ base_url('/admin/admin/create')}}" class="btn btn-outline-success"><i class="mdi mdi-plus"></i>Tambah admin</a>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <table id="dataTables" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($admin as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->username }}</td>
                  <td>{{ $value->level->nama }}</td>
                  <td>
                    <a href="{{ base_url('/admin/admin/edit/') . $value->id_admin }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ base_url('/admin/admin/delete/') . $value->id_admin }}" class="btn btn-sm btn-danger">Delete</a>
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
