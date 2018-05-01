@extends('template')

@section('title', 'Ubah Profil')

@section('content')
    <div class="container mt-5 mb-5">
        <form action="{{ base_url('profil/update/' . $user->id_pengguna) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Masukkan Nama">
                        @if($errors->has('nama'))
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="telp">Telpon</label>
                        <input id="telp" type="text" class="form-control" name="telp" value="{{ old('telp', $user->telp) }}" placeholder="Masukkan Telpon">
                        @if($errors->has('telp'))
                            <small class="text-danger">{{ $errors->first('telp') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                        <small class="text-muted">Biarkan kosong apabila tidak ingin merubah email</small>
                        @if($errors->has('email'))
                            <br>
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <input class="btn btn-primary" type="submit" value="Simpan">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input id="foto" type="file" class="form-control" name="foto">
                        <small class="text-muted">Biarkan kosong apabila tidak ingin merubah foto</small>
                        @if($errors->has('foto'))
                            <br>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection