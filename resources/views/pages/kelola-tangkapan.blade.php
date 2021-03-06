@extends('layouts.app')
@section('title', 'Kelola Data Tangkapan - Pengolahan Data Nelayan')

@section('content')
<section class="content-kelola">
  <div class="container-fluid px-3 py-2">
    <a href="{{ route('beranda') }}" class="btn">
      <i class="fas fa-lg text-muted fa-chevron-left"></i>
    </a>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="row px-3">
          <h4>Kelola Data Hasil Tangkapan <i class="far text-muted fa-edit ml-1"></i></h4>
          <form class="form-inline nav-search ml-auto mb-2" action="{{ route('tangkapan.index') }}">
            <input name="search" class="form-control form-control-sm ml-sm-5" type="search" placeholder="Search" aria-label="Search" autocomplete="off" value="{{ $keyword }}" style="width: 400px;" autofocus onfocus="var temp_value=this.value; this.value=''; this.value=temp_value">
            <button class="btn btn-sm btn-primary my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form> 
        </div>
        <table class="table table-bordered table-responsive-sm text-center text-nowrap">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pemilik</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Hasil Tangkapan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr id="sid{{ $item->id }}">
              <td scope="row" width="70px">
                <div class="form-check text-center">
                  <input class="form-check-input" name="ids" type="checkbox" value="{{ $item->id }}">
                </div>
              </td>
              <td>{{ $item->user->name }}</td>
              <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM Y') }}</td>
              <td>{{ $item->desa }}, Kec. {{ $item->kecamatan }}</td>
              <td>{{ $item->hasil_tangkapan }}</td>
              <td width="100px">
                <button class="btn btn-sm btn-info" style="width: 70px" type="button" data-toggle="modal" data-target="#detail-{{ $item->id }}">
                  <i class="fas fa-eye fa-sm mr-1"></i>
                  Detail
                </button>
                <button class="btn btn-sm btn-primary" style="width: 70px" type="button" data-toggle="modal" data-target="#edit-{{ $item->id }}">
                  <i class="fas fa-pen fa-sm mr-1"></i>
                  Edit
                </button>
              </td>
            </tr>
            @empty
            <tr>
              <th colspan="10" class="text-center">
                Data tidak ditemukan
              </th>
            </tr>
            @endforelse
          </tbody>
        </table>
        <button class="btn btn-danger btn-sm" disabled type="button" data-toggle="modal" data-target="#konfirmasiHapus">
          <i class="far fa-trash-alt"></i>
          Hapus
        </button>
      </div>
    </div>  
  </div>

  <!-- Detail -->
  @foreach ($items as $item)
  <div class="modal fade" id="detail-{{ $item->id }}" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="detailLabel">Detail Tangkapan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th width="40%">Pemilik</th>
                <td>{{ $item->user->name }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>{{ $item->user->alamat }}</td>
              </tr>
              <tr>
                <th>No Telp</th>
                <td>{{ $item->user->no_telp }}</td>
              </tr>
              <tr>
                <th>Tanggal</th>
                <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM Y') }}</td>
              </tr>
              <tr>
                <th>Lokasi</th>
                <td>{{ $item->desa }}, Kec. {{ $item->kecamatan }}</td>
              </tr>
              <tr>
                <th>Jensi Ikan</th>
                <td>{{ $item->ikan }}</td>
              </tr>
              <tr>
                <th>Hasil Tangkapan</th>
                <td>{{ $item->hasil_tangkapan }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
  <!-- Edit -->
  @foreach ($items as $item)
  <div class="modal fade" id="edit-{{ $item->id }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="editLabel">Edit Data Hasil Tangkapan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('tangkapan.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input name="uid" type="hidden" value="{{ $item->user_id }}">
            
            <div class="form-group row">
              <label for="name" class="col-sm-4 col-form-label">Nama Pemilik</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" value="{{ $item->user->name }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name="tanggal" value="{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('Y-MM-DD') }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
              <div class="col-sm-4">
                <small>Kecamatan :</small>
                <select name="kecamatan" required class="form-control kecamatan" id="kecamatan" value="{{ old('kecamatan') }}">
                  <option selected disabled>-- Pilih kecamatan --</option>
                  @foreach($data as $kec)
                    <option  value="{{ $kec->id }}">
                      {{ ucfirst($kec->kecamatan) }}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-4">
                <small>Desa :</small>
                <select name="desa" required class="form-control desa" id="desa" value="{{ old('desa') }}">
                  <option selected disabled>*Masukan kecamatan</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="ikan" class="col-sm-4 col-form-label">Jenis Ikan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="ikan" value="{{ $item->ikan }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="hasil_tangkapan" class="col-sm-4 col-form-label">Hasil Tangkapan (kg)</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="hasil_tangkapan" value="{{ $item->hasil_tangkapan }}">
              </div>
            </div>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-success">
                <i class="fas fa-check-circle mr-2"></i>
                Simpan Perubahan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- Konfirmasi Hapus -->
  <div class="modal fade" id="konfirmasiHapus" tabindex="-1" aria-labelledby="konfirmasiHapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="konfirmasiHapusLabel">Konfirmasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <span class="fa-stack fa-lg">
            <i class="far fa-circle fa-stack-2x text-warning"></i>
            <i class="fas fa-exclamation fa-stack-1x text-warning"></i>
          </span>
          <div class="row justify-content-center mt-2">
            <p>Yakin untuk menghapus?</p>
          </div>
          <div class="row no-gutters mt-4">
            <div class="col-6 text-center px-1">
              <button class="btn btn-secondary btn-block" type="button" data-dismiss="modal">Batalkan</button>
            </div>
            <div class="col-6 text-center px-1">
              <a href="#" class="btn btn-danger btn-block" id="deleteSelected" data-dismiss="modal">Hapus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection

@push('addon-script')
<script>

  $(document).ready(function () {
    $(".kecamatan").on("change", function () {
      let id = $(this).val();
      $(".desa").empty();
      $(".desa").append(
        `<option value="0" disabled selected>Memproses...</option>`
      );
      $.ajax({
        type: "GET",
        url: "tangkapan/desa/" + id,
        success: function (response) {
          var response = JSON.parse(response);
          console.log(response);
          $(".desa").empty();
          $(".desa").append(
            `<option selected disabled>-- Pilih Desa --</option>`
          );
          response.forEach((element) => {
            $(".desa").append(
                `<option value="${element["desa"]}">${element["desa"]}</option>`
            );
          });
        },
      });
    });
  });

  // Mengaktifkan tombol hapus
  var checks = $(':checkbox.form-check-input');
  checks.change(function() {
      $('.btn-danger').attr('disabled', ! checks.filter(':checked').length);
  });

  $(function(e) {

    $("#deleteSelected").click(function(e) {
      e.preventDefault();
      var allids = [];

      $("input:checkbox[name=ids]:checked").each(function() {
        allids.push($(this).val());
      });

      $.ajax({
        url:"{{route('hapus-tangkapan')}}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          });
        }
      });
    });

  });

</script>
@endpush