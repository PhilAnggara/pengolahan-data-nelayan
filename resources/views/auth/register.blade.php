@extends('layouts.app-login')
@section('title', 'Register')

@section('content')
<section class="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card px-2">
          <div class="card-body">
            <form class="reg" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                {{-- <input type="text" class="form-control" name="name" autocomplete="off"> --}}
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                {{-- <input type="text" class="form-control" name="alamat" autocomplete="off"> --}}
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="no_telp">No Telp</label>
                {{-- <input type="number" class="form-control" name="no_telp"> --}}
                <input id="no_telp" type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus>
                @error('no_telp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                {{-- <input type="text" class="form-control" name="username" autocomplete="off"> --}}
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                {{-- <input type="password" class="form-control" name="password"> --}}
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password-confirm">Konfirmasi Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

              <button type="submit" class="btn btn-block btn-success">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection