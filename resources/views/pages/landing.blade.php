@extends('layouts.app-login')
@section('title', 'Pengolahan Data Nelayan')

@section('content')

<section class="login">
  <div class="container">
    <div class="landing">
      <h1>Pengolahan Data Nelayan</h1>
      <h1>Dinas Perikanan Kab. Kep. Siau Tagulandang Biaro</h1>
      @guest
      <a href="{{ url('login') }}" class="btn btn-primary btn-lg shadow px-5">Masuk</a>
      <a href="{{ url('register') }}" class="btn btn-secondary btn-lg shadow px-5">Daftar</a>
      @endguest
      @auth
      <a href="{{ url('beranda') }}" class="btn btn-primary btn-lg shadow px-5">Beranda</a>
      @endauth
    </div>
  </div>
</section>


@endsection

@push('addon-style')
  <style type="text/css">
  
  .landing {
    padding-top: 200px;
    text-align: center
  }
  h1 {
    color: white;
    font-size: 30px;
    width: 100%;
    text-shadow: 1px 1px 10px rgba(0, 0, 0, .9);
    font-weight: 700;
  }
  a {
    margin: 30px 5px;
  }

  @media (min-width: 992px) {
    h1 {
      font-size: 50px;
    }
    a {
      margin: 50px 16px;
    }
  }
    
  </style>
@endpush