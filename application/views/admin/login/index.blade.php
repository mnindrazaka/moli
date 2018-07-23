@extends('template-auth')

@section('title', 'Autentikasi')

@section('content')
    <div class="card fat">
        <div class="card-body">
            <h4 class="card-title">Silahkan Login</h4>
            <form action="{{ base_url('admin/login/login_process') }}" method="post">
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" value="{{ old('username') }}">
                  @if($errors->has('username'))
                      <span class="text-danger">{{ $errors->first('username') }}</span>
                  @endif
              </div>

              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                  @if($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
              </div>

                <div class="form-group no-margin">
                    <button type="submit" class="btn btn-primary btn-block" value="Login">
                        Masuk
                    </button>
                </div>
                <div class="margin-top20 text-center">
                    lupa akun ? <a href="{{ base_url('') }}">Hubungi admin</a>
                </div>
            </form>
        </div>
    </div>
@endsection
