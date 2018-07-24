@extends('template')

@section('title', 'Ubah Profil')

@section('content')
    <div class="container mt-5 mb-5">
        <form action="{{ base_url('profil/updatePassword/' . $user->id_pengguna) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="old_password">Password Lama</label>
                        <input id="old_password" type="password" class="form-control" name="old_password" placeholder="Masukkan Password Lama">
                        @if($errors->has('old_password'))
                            <small class="text-danger">{{ $errors->first('old_password') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Password Baru</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Password Baru">
                        @if($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Masukkan Password Lagi">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Simpan">
                </div>
            </div>
        </form>
    </div>
@endsection