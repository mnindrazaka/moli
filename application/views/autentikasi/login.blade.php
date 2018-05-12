@extends('autentikasi.template')

@section('title', 'Autentikasi')

@section('content')
    <div class="card fat">
        <div class="card-body">
            <h4 class="card-title">Silahkan Login</h4>
            <form method="POST" action="{{ base_url('Login/loginProcess') }}">
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

                <div class="form-group no-margin">
                    <button type="submit" class="btn btn-primary btn-block">
                        Masuk
                    </button>
                </div>
                <div class="margin-top20 text-center">
                    Belum punya akun ? <a href="{{ base_url('Register') }}">Daftar</a>
                </div>
            </form>
        </div>
    </div>
@endsection