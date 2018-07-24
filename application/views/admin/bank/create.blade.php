@extends('admin/template')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Tambah Bank</h3>
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
            <form action="{{ base_url('admin/bank/store') }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Nama Bank</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" autofocus>
                @if($errors->has('nama'))
                  <small class="text-danger">{{ $errors->first('nama') }}</small>
                @endif
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection
