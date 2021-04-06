@extends('layouts.app')
@section('title', 'Input Hasil Tangkapan - Pengolahan Data Nelayan')

@section('content')
<section class="content">
  <div class="container-fluid px-3 py-2">
    <a href="" class="btn">
      <i class="fas fa-lg text-muted fa-chevron-left"></i>
    </a>
    <div class="row">
      <div class="col-sm-4">
        <h2 class="text-uppercase ml-2">Input hasil tangkapan</h2>
      </div>
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <form>
              <div class="form-row">
                <div class="form-group col-sm-6 p-3">
                  <label for="tanggal">Tanggal</label>
                  <input class="form-control form-control-sm" name="tanggal" type="date" placeholder="">
                  <label for="nama">Nama</label>
                  <input class="form-control form-control-sm" name="nama" type="text" placeholder="" autocomplete="off">
                  <label for="alamat">Alamat Pemilik</label>
                  <input class="form-control form-control-sm" name="alamat" type="text" placeholder="" autocomplete="off">
                  <label for="noTelp">No Telp</label>
                  <input class="form-control form-control-sm" name="noTelp" type="number" placeholder="">
                </div>
                <div class="form-group col-sm-6 p-3">
                  <h5>Lokasi</h5>
                  <div class="form-row border p-2">
                    <div class="col-4 lokasi">
                      <p>Provinsi <span class="float-right">:</span></p>
                      <p>Kabupaten <span class="float-right">:</span></p>
                    </div>
                    <div class="col-8 lokasi">
                      <p>Sulawesi Utara</p>
                      <p>Kep. Siau Tagulandang Biaro</p>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="kecamatan">Kecamatan</label>
                      <select name="kecamatan" required class="form-control form-control-sm">
                        <option value="">-- Pilih kecamatan --</option>
                        <option value="Tagulandang">Tagulandang</option>
                        <option value="Biaro">Biaro</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="desa">Desa</label>
                      <select name="desa" required class="form-control form-control-sm">
                        <option value="">-- Pilih Desa --</option>
                        <option value="Kisihang">Kisihang</option>
                        <option value="Bawuleu">Bawuleu</option>
                      </select>
                    </div>
                  </div>
                  <label for="tangkapan">Hasil Tangkapan (kg)</label>
                  <input class="form-control form-control-sm" name="tangkapan" type="number" placeholder="">
                </div>
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