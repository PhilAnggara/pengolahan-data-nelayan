@extends('layouts.app')
@section('title', 'Input Hasil Produksi - Pengolahan Data Nelayan')

@section('content')
<section class="content">
  <div class="container-fluid px-3 py-2">
    <a href="" class="btn">
      <i class="fas fa-lg text-muted fa-chevron-left"></i>
    </a>
    <div class="row">
      <div class="col-sm-4">
        <h2 class="text-uppercase ml-2">Input hasil produksi</h2>
      </div>
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <form class="p-3 col-sm-8">
              <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <select name="lokasi" required class="form-control form-control-sm">
                  <option selected disabled>-- Pilih Lokasi --</option>
                  <option value="Pasar Siau">Siau</option>
                  <option value="Pasar Tagulandang">Tagulandang</option>
                </select>
              </div>
              <div class="from-group mb-2">
                <label for="pasar">Nama Pasar</label>
                <input class="form-control form-control-sm" name="pasar" type="text" placeholder="">
              </div>
              <div class="from-group">
                <label for="produksi">Hasil Produksi</label>
                <input class="form-control form-control-sm" name="produksi" type="number" placeholder="">
              </div>
              <button type="submit" class="btn btn-secondary px-sm-5 py-2 mt-5 mb-2 ml-3">Simpan</button>
              <button type="submit" class="btn btn-light px-sm-5 py-2 mt-5 mb-2">Batalkan</button>
            </form>
          </div>
        </div>          
      </div>
    </div>
  </div>
</section>
@endsection