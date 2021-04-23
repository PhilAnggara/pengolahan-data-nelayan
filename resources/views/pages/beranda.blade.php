@extends('layouts.app')
@section('title', 'Pengolahan Data Nelayan')

@section('content')

{{-- User --}}
@if (auth()->user()->roles == 'user')
<section class="content-user">
  <div class="container-fluid px-3 py-2">
    <h4 class="text-uppercase ml-4 mt-4">Menu</h4>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6 px-5 pt-3">
            <a href="{{ route('tangkapan.create') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak text-left">
              <i class="fas text-muted fa-plus mr-1"></i>
              INPUT HASIL TANGKAPAN
            </a>
          </div>
          <div class="col-sm-6 px-5 pt-3 text-center user">
            <img src="{{ url('frontend/images/user-pic.png') }}" class="img-thumbnail rounded-circle">
            <h4 class="text-uppercase">{{ Auth::user()->name }}</h4>
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
{{-- End of user --}}

{{-- Admin --}}
@if (auth()->user()->roles == 'admin')
<section class="content-user">
  <div class="container-fluid px-sm-3 py-2">
    <h4 class="text-uppercase ml-4 mt-4">Menu Admin</h4>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-5 pl-sm-4 pt-3">
            <div class="card shadow tabel">
              <div class="card-body">
                <h4 class="mb-2 ml-2">Hasil Tangkapan</h4>
                <div class="table-responsive">
                  <table class="table table-bordered text-center text-nowrap">
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
                      @forelse ($things as $thing)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $thing->user->name }}</td>
                        <td>{{ Carbon\Carbon::parse($thing->tanggal)->isoFormat('D MMMM Y') }}</td>
                        <td>{{ $thing->desa }}, Kec. {{ $thing->kecamatan }}</td>
                        <td>{{ $thing->hasil_tangkapan }}</td>
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
          </div>
          <div class="col-sm-5 pl-sm-1 pt-3">
            <div class="card shadow tabel">
              <div class="card-body">
                <h4 class="mb-2 ml-2">Hasil Produksi</h4>
                <div class="table-responsive">
                  <table class="table table-bordered text-center text-nowrap">
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
                        <td>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</td>
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
          </div>
          <div class="col-sm-2 pt-3 text-center user">
            <img src="{{ url('frontend/images/user-pic.png') }}" class="img-thumbnail rounded-circle">
            <h4 class="text-uppercase">{{ Auth::user()->name }}</h4>
            <a href="{{ route('produksi.create') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak-kanan text-left">
              <i class="fas text-muted fa-plus ml-1"></i>
              INPUT HASIL PRODUKSI
            </a>
            <a href="{{ route('tangkapan.create') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak-kanan text-left">
              <i class="fas text-muted fa-plus ml-1"></i>
              INPUT HASIL TANGKAPAN
            </a>
            <a href="{{ route('tangkapan.index') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak-kanan text-left">
              <i class="far text-muted fa-edit ml-1"></i>
              KELOLA DATA TANGKAPAN
            </a>
            <a href="{{ route('produksi.index') }}" class="btn btn-block btn-outline-dark btn-sm btn-kotak-kanan text-left mb-5">
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
{{-- End of admin --}}

{{-- Kepala --}}
@if (auth()->user()->roles == 'kepala')
<section class="content-user">
  <div class="container-fluid px-sm-3 py-2">
    <h4 class="text-uppercase ml-4 mt-4">Menu Kepala</h4>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row">
          <h4 class="ml-4 mb-0">Laporan Terkini</h4>
          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-dark btn-sm btn-logout-kepala">LOGOUT</button>
          </form>
        </div>
        <div class="row">
          <div class="col-sm-6 pl-sm-4 pt-3">
            <div class="card shadow tabel">
              <div class="card-body">
                <h4 class="mb-2 ml-2">Hasil Tangkapan</h4>
                <div class="table-responsive">
                  <table class="table table-bordered text-center text-nowrap">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Jenis Ikan</th>
                        <th scope="col">Hasil Tangkapan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($things as $thing)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $thing->user->name }}</td>
                        <td>{{ Carbon\Carbon::parse($thing->tanggal)->isoFormat('D MMMM Y') }}</td>
                        <td>{{ $thing->desa }}, Kec. {{ $thing->kecamatan }}</td>
                        <td>{{ $thing->ikan }}</td>
                        <td>{{ $thing->hasil_tangkapan }}</td>
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
          </div>
          <div class="col-sm-6 pl-sm-1 pt-3">
            <div class="card shadow tabel">
              <div class="card-body">
                <h4 class="mb-2 ml-2">Hasil Produksi</h4>
                <div class="table-responsive">
                  <table class="table table-bordered text-center text-nowrap">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pasar</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Jenis Ikan</th>
                        <th scope="col">Hasil Produksi</th>
                        <th scope="col">Terjual</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($items as $item)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->pasar }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->ikan }}</td>
                        <td>{{ $item->hasil_produksi }}</td>
                        <td>{{ $item->terjual }}</td>
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
          </div>
        </div>
      </div>
    </div>  
  </div>
</section>
@endif
{{-- End of kepala --}}

@endsection