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
        <h2 class="text-uppercase ml-2">Input hasil produksi</h2>
      </div>
      
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">

            <form class="p-3 col-sm-8" action="{{ route('produksi.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <select name="lokasi" required class="form-control form-control-sm @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}">
                  <option selected disabled>-- Pilih Lokasi --</option>
                  <option value="Siau">Siau</option>
                  <option value="Tagulandang">Tagulandang</option>
                  <option value="Biaro">Biaro</option>
                </select>
                @error('lokasi')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="from-group mb-2">
                <label for="pasar">Nama Pasar</label>
                <input class="form-control form-control-sm @error('pasar') is-invalid @enderror" name="pasar" type="text" placeholder="" value="{{ old('pasar') }}">
                @error('pasar')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="from-group">
                <label for="hasil_produksi">Hasil Produksi</label>
                <input class="form-control form-control-sm @error('hasil_produksi') is-invalid @enderror" name="hasil_produksi" type="number" placeholder="" value="{{ old('hasil_produksi') }}">
                @error('hasil_produksi')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
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