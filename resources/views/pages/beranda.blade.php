@extends('layouts.app')
@section('title', 'Pengolahan Data Nelayan')

@section('content')
<section class="content-user">
  <div class="container-fluid px-3 py-2">
    <h4 class="text-uppercase ml-4 mt-4">Menu</h4>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6 px-5 pt-3">
            <a href="" class="btn btn-block btn-outline-dark btn-sm btn-kotak text-left">INPUT HASIL TANGKAPAN</a>
            <a href="" class="btn btn-block btn-outline-dark btn-sm btn-kotak text-left">INFORMASI</a>
          </div>
          <div class="col-sm-6 px-5 pt-3 text-center user">
            <img src="{{ url('frontend/images/user-pic.png') }}" class="img-thumbnail rounded-circle">
            <h4 class="text-uppercase">Nama User</h4>
          </div>
        </div>
        <a href="" class="btn btn-outline-dark btn-sm btn-logout">LOGOUT</a>
      </div>
    </div>  
  </div>
</section>
@endsection