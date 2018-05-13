@extends('admin/template')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Kategori Edit</h3>
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
            <div class="form-group">
              <label for="title">Judul Artikel</label>
              <input type="text" class="form-control" name="title" value="{{ old('nama', $kategori->nama) }}" required>
              <div class="invalid-feedback">Isi judul dulu gan</div>
            </div>
            <div class="form-group">
              <label for="text">Deskripsi</label>
              <textarea class="form-control" name="text" rows="3" required>{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
              <div class="invalid-feedback">Isi kontennya dulu gan</div>
            </div>
            {{-- <div class="form-group">
            <label>Kategori</label>
            {{ form_dropdown('cat_id', $categories, set_value( 'cat_id', $kategori->fk_cat_id ), 'class="form-control"' ); }}
            <div class="invalid-feedback">Pilih dulu kategorinya gan</div>
          </div> --}}
          <div class="form-group">
            @if( $kategori->gambar )
              <center>
                <img class="card-img-top" src="{{ base_url() .'assets/uploads/'. $kategori->gambar }}" alt="Card image cap" style="height: 400px; width: 400px;">
              </center>
            @endif
            <br>
            <label for="thumbnail">Gambar</label>
            <input type="file" class="form-control-file" name="thumbnail">
          </div>
          <button id="submitBtn" type="submit" class="btn btn-success">Edit</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection
