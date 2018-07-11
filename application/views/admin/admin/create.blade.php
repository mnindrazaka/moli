@extends('admin/template')

@section('content')
  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Tambah Admin</h3>
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
            <form action="{{ base_url('admin/admin/store') }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" value="{{ old('username') }}" autofocus>
                @if($errors->has('username'))
                  <small class="text-danger">{{ $errors->first('username') }}</small>
                @endif
              </div>

              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" autofocus>
                @if($errors->has('password'))
                  <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif
              </div>

              <div class="form-group">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" autofocus>
                @if($errors->has('password_confirmation'))
                  <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                @endif
              </div>

              <div class="form-group">
                <label for="id_level">Level</label>
                <select class="custom-select" name="id_level" id="id_level">
                  <option selected value="">Pilih level</option>
                  @foreach($level as $row)
                    <option value="{{ $row->id_level }}" {{ $row->id_level == old('id_level') ? 'selected':'' }}>
                        {{ $row->nama }}
                    </option>
                  @endforeach
                </select>
                @if($errors->has('id_level'))
                  <small class="text-danger">{{ $errors->first('id_level') }}</small>
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
