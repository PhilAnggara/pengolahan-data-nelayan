@extends('layouts.app')
@section('title', 'Pengolahan Data Nelayan')

@section('content')

@if (auth()->user()->roles == 'user')
<section class="content-user">
  <div class="container-fluid px-3 py-2">
    <h4 class="text-uppercase ml-4 mt-4">Menu</h4>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6 px-5 pt-3">
            <a href="{{ route('beranda') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak text-left">INPUT HASIL TANGKAPAN</a>
            <a href="{{ route('beranda') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak text-left">INFORMASI</a>
          </div>
          <div class="col-sm-6 px-5 pt-3 text-center user">
            <img src="{{ url('frontend/images/user-pic.png') }}" class="img-thumbnail rounded-circle">
            <h4 class="text-uppercase">Nama User</h4>
          </div>
        </div>
        <form action="{{ url('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-outline-dark btn-sm btn-logout">LOGOUT</button>
        </form>
      </div>
    </div>  
  </div>
</section>
@endif

@if (auth()->user()->roles == 'admin')
<section class="content-user">
  <div class="container-fluid px-3 py-2">
    <h4 class="text-uppercase ml-4 mt-4">Menu Admin</h4>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-5 pl-4 pt-3">
            <div class="card shadow-sm tabel">
              <div class="card-body">
                <h4 class="mb-2 ml-2">Hasil Tangkapan</h4>
                <table class="table table-bordered table-responsive-sm text-center">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Pemilik</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Lokasi</th>
                      <th scope="col">Hasil Tangkapan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Nama Satu</td>
                      <td>06/04/2020</td>
                      <td>Siau</td>
                      <td>15</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Nama Dua</td>
                      <td>06/04/2020</td>
                      <td>Tagulandang</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Nama Tiga</td>
                      <td>06/04/2020</td>
                      <td>Biaro</td>
                      <td>21</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-5 pl-1 pt-3">
            <div class="card shadow-sm tabel">
              <div class="card-body">
                <h4 class="mb-2 ml-2">Hasil Produksi</h4>
                <table class="table table-bordered table-responsive-sm text-center">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Pemilik</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Lokasi</th>
                      <th scope="col">Hasil Produksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Nama Satu</td>
                      <td>06/04/2020</td>
                      <td>Siau</td>
                      <td>15</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Nama Dua</td>
                      <td>06/04/2020</td>
                      <td>Tagulandang</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Nama Tiga</td>
                      <td>06/04/2020</td>
                      <td>Biaro</td>
                      <td>21</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-2 pt-3 text-center user">
            <img src="{{ url('frontend/images/user-pic.png') }}" class="img-thumbnail rounded-circle">
            <h4 class="text-uppercase">Nama User</h4>
            <a href="{{ route('beranda') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak-kanan text-left">
              <i class="far text-muted fa-edit ml-1"></i>
              KELOLA DATA TANGKAPAN
            </a>
            <a href="{{ route('beranda') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak-kanan text-left">
              <i class="far text-muted fa-edit ml-1"></i>
              KELOLA DATA PRODUKSI
            </a>
          </div>
        </div>
        <form action="{{ url('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-outline-dark btn-sm btn-logout">LOGOUT</button>
        </form>
      </div>
    </div>  
  </div>
</section>
@endif

@endsection