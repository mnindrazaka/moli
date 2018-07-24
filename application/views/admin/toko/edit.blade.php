@extends('admin/template')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Edit Toko</h3>
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
            <form action="{{ base_url('admin/toko/update/' . $toko->id_toko) }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Nama Toko</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama', $toko->nama) }}">
                @if($errors->has('nama'))
                  <small class="text-danger">{{ $errors->first('nama') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="title">Telepon</label>
                <input type="text" class="form-control" name="telp" value="{{ old('telp', $toko->telp) }}">
                @if($errors->has('telp'))
                  <small class="text-danger">{{ $errors->first('telp') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="title">Kota</label>
                <input type="text" class="form-control" name="kota" value="{{ old('kota', $toko->kota) }}">
                @if($errors->has('kota'))
                  <small class="text-danger">{{ $errors->first('kota') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="text">Deskripsi Toko</label>
                <textarea class="form-control" name="deskripsi" rows="3">{{ old('deskripsi', $toko->deskripsi) }}</textarea>
                @if($errors->has('deskripsi'))
                  <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="">Slogan Toko</label>
                <textarea class="form-control" name="slogan" rows="2">{{ old('slogan', $toko->slogan) }}</textarea>
                @if($errors->has('slogan'))
                  <small class="text-danger">{{ $errors->first('slogan') }}</small>
                @endif
              </div>
              <div class="form-group">
                @if( $toko->logo )
                  <center>
                    <img class="card-img-top" src="{{ base_url() .'assets/uploads/toko/'. $toko->logo }}" alt="Card image cap" style="height: 400px; width: 400px;">
                  </center>
                @endif
                <br>
                <label for="">Logo</label>
                <input type="file" name="logo" class="form-control">
                @if($errors->has('logo'))
                  <small class="text-danger">{{ $errors->first('logo', $toko->logo) }}</small>
                @endif
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Edit">
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
