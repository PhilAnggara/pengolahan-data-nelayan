@extends('layouts.app')
@section('title', 'Kelola Data Produksi - Pengolahan Data Nelayan')

@section('content')
<section class="content-kelola">
  <div class="container-fluid px-3 py-2">
    <a href="{{ route('beranda') }}" class="btn">
      <i class="fas fa-lg text-muted fa-chevron-left"></i>
    </a>
    <div class="card shadow-sm">
      <div class="card-body">
        <h4>Kelola Data Hasil Produksi <i class="far text-muted fa-edit ml-1"></i></h4>
        <table class="table table-bordered table-responsive-sm text-center">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pasar</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Hasil Produksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item->pasar }}</td>
              <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</td>
              <td>{{ $item->lokasi }}</td>
              <td>{{ $item->hasil_produksi }}</td>
            </tr>
            @empty
            <tr>
              <th colspan="10" class="text-center">
                Data Kosong
              </th>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>  
  </div>
</section>
@endsection