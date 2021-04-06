@extends('layouts.app-login')
@section('title', 'Login')

@section('content')
<section class="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card log px-2">
          <div class="card-body">
            <div class="text-center mb-3">
              <img src="frontend/images/logo-kementrian.png" class="">
            </div>
            <h3 class="text-uppercase text-center mb-4">Dinas Perikanan Kab. Kep. Siau Tagulandang Biaro (Sitaro)</h3>
            <form class="log">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Masuk</button>
                <a href="" class="btn btn-outline-success">Registrasi</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection