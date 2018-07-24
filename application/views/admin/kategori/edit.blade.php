@extends('admin/template')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Edit Kategori</h3>
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
            <form action="{{ base_url('admin/kategori/update/' . $kategori->id_kategori) }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Nama Kategori</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama', $kategori->nama) }}">
                @if($errors->has('nama'))
                  <small class="text-danger">{{ $errors->first('nama') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="text">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
                @if($errors->has('deskripsi'))
                  <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
                @endif
              </div>
              <div class="form-group">
                @if( $kategori->gambar )
                  <center>
                    <img class="card-img-top" src="{{ base_url() .'assets/uploads/kategori/'. $kategori->gambar }}" alt="Card image cap" style="height: 400px; width: 400px;">
                  </center>
                @endif
                <br>
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
                @if($errors->has('gambar'))
                  <small class="text-danger">{{ $errors->first('gambar', $kategori->gambar) }}</small>
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
