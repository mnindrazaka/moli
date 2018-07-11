@extends('admin/template')

@section('content')
    <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Edit Level</h3>
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
            <form action="{{ base_url('admin/level/update/' . $level->id_level) }}" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old("nama", $level->nama) }}">
            @if($errors->has('nama'))
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>

        <div class="form-group">
            <p>Dapat Mengakses Halaman : </p>
            @foreach($modul as $row)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="id_modul[]" value="{{ $row->id_modul }}" class="custom-control-input" id="{{ $row->id_modul }}" {{ in_array($row->id_modul, $level_akses) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="{{ $row->id_modul }}">{{ $row->label }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection