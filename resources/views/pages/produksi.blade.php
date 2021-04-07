@extends('layouts.app')
@section('title', 'Input Hasil Produksi - Pengolahan Data Nelayan')

@section('content')
<section class="content">
  <div class="container-fluid px-3 py-2">
    <a href="{{ route('beranda') }}" class="btn">
      <i class="fas fa-lg text-muted fa-chevron-left"></i>
    </a>
    <div class="row">
      <div class="col-sm-4">
        <h2 class="text-uppercase ml-2">Input hasil hasil</h2>
      </div>
      
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form class="p-3 col-sm-8" action="{{ route('produksi.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <select name="lokasi" required class="form-control form-control-sm">
                  <option selected disabled>-- Pilih Lokasi --</option>
                  <option value="Siau">Siau</option>
                  <option value="Tagulandang">Tagulandang</option>
                  <option value="Biaro">Biaro</option>
                </select>
              </div>
              <div class="from-group mb-2">
                <label for="pasar">Nama Pasar</label>
                <input class="form-control form-control-sm" name="pasar" type="text" placeholder="">
              </div>
              <div class="from-group">
                <label for="hasil_produksi">Hasil Produksi</label>
                <input class="form-control form-control-sm" name="hasil_produksi" type="number" placeholder="">
              </div>
              <button type="submit" class="btn btn-secondary px-sm-5 py-2 mt-5 mb-2 ml-3">Simpan</button>
              <a href="{{ route('beranda') }}" class="btn btn-sm btn-light px-sm-5 py-2 mt-5 mb-2">Batalkan</a>
            </form>
          </div>
        </div>          
      </div>
    </div>
  </div>
</section>
@endsection