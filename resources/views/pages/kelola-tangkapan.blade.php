@extends('layouts.app')
@section('title', 'Kelola Data Tangkapan - Pengolahan Data Nelayan')

@section('content')
<section class="content-kelola">
  <div class="container-fluid px-3 py-2">
    <a href="" class="btn">
      <i class="fas fa-lg text-muted fa-chevron-left"></i>
    </a>
    <div class="card shadow-sm">
      <div class="card-body">
        <h4>Kelola Data Hasil Tangkapan <i class="far text-muted fa-edit ml-1"></i></h4>
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
</section>
@endsection