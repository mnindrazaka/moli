@extends('autentikasi.template')

@section('title', 'Autentikasi')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Silahkan Daftar</h4>
            <form method="POST" action="{{ base_url('autentikasi/doregister') }}">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" autofocus>
                    @if($errors->has('nama'))
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                    @if($errors->has('email'))
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                    @if($errors->has('password'))
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="form-group no-margin">
                    <button type="submit" class="btn btn-primary btn-block">
                        Daftar
                    </button>
                </div>
                <div class="margin-top20 text-center">
                    Sudah punya akun ? <a href="{{ base_url('autentikasi/login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection