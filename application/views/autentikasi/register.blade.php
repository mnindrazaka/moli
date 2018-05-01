@extends('autentikasi.template')

@section('title', 'Autentikasi')

@section('content')
    <div class="card fat">
        <div class="card-body">
            <h4 class="card-title">Silahkan Daftar</h4>
            <form method="POST" action="{{ base_url('autentikasi/dologin') }}">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required data-eye>
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