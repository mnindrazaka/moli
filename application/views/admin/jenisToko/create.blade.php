@extends('admin/template')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Tambah Toko</h3>
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
            <form action="{{ base_url('admin/toko/store') }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Nama Toko</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" autofocus>
                @if($errors->has('nama'))
                  <small class="text-danger">{{ $errors->first('nama') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" name="telp" class="form-control" value="{{ old('telp') }}">
                @if($errors->has('telp'))
                  <small class="text-danger">{{ $errors->first('telp') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="">Kota</label>
                <input type="text" name="kota" class="form-control" value="{{ old('kota') }}">
                @if($errors->has('kota'))
                  <small class="text-danger">{{ $errors->first('kota') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="">Deskripsi Toko</label>
                <textarea class="form-control" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                @if($errors->has('deskripsi'))
                  <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="">Slogan Toko</label>
                <textarea class="form-control" name="slogan" rows="2">{{ old('slogan') }}</textarea>
                @if($errors->has('slogan'))
                  <small class="text-danger">{{ $errors->first('slogan') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="gambar" class="form-control">
                @if($errors->has('gambar'))
                  <small class="text-danger">{{ $errors->first('gambar') }}</small>
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
