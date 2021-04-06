@extends('layouts.app-login')
@section('title', 'Register')

@section('content')
<section class="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card px-2">
          <div class="card-body">
            <form class="reg">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="noTelp">No Telp</label>
                <input type="number" class="form-control" name="noTelp">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
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