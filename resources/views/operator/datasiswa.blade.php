@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Data Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection



@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Siswa</h3><br> <br>

        <form action="/filter/datasiswa" method="post">
          @csrf
          <div class="float-sm-left form-group" >
            <select class="form-control"name="tahun">
            <option value="Semua">Tahun Ajaran</option>
            @forelse ($tahun as $item)
            <option value="{{ $item->tahun_masuk }}">{{ $item->tahun_masuk }}</option>
            @empty
                
            @endforelse
            </select>
          </div>

          <div class="float-sm-left form-group" >
            <select class="form-control"name="kelas">
            <option value="Semua">Semua kelompok</option>
            <option value="Kelompok A1">Kelompok A1</option>
            <option value="Kelompok A2">Kelompok A2</option>
            <option value="Kelompok A3">Kelompok A3</option>
            <option value="Kelompok A4">Kelompok A4</option>
            <option value="Kelompok B1">Kelompok B1</option>
            <option value="Kelompok B2">Kelompok B2</option>
            <option value="Kelompok B3">Kelompok B3</option>
            <option value="Kelompok B4">Kelompok B4</option>
            <option value="Kepompong">Kepompong</option>
            <option value="Kupu-kupu">Kupu-kupu</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-sm m-1 ">Tampil </button>
        </form>
        <div class="col-2  p-1 float-sm-right">
          {{-- <a href="/operator/dataguru/tambahsiswa">
            <button type="button" class="btn btn-block btn-success btn-sm ">Tambah Data </button>
          </a>
        </div> --}}
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example3">
          <thead>
            <tr >
              <th>NO</th>
              <th>No Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelas</th>
              <th>Tahun Masuk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$p->no_induk}}</td>
            <td>{{$p->nama_lengkap}}</td>
            <td>{{$p->jenis_kelamin}}</td>
            <td>{{$p->kelas}}</td>
            <td>{{$p->tahun_masuk}}</td>
            <td><form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data_siswa.destroy', $p->id) }}"method="POST">
              <a href="{{ url('/operator/datasiswa', $p->id) }}" class="btn btn-sm btn-success waves-effect m-r-20">Detail</a>
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal" data-target="#modal-danger{{$p->id}}">
              Hapus
            </button>
            </form>
            <div class="modal fade" id="modal-danger{{$p->id}}">
              <div class="modal-dialog">
                <div class="modal-content bg-danger">
                  <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{ route('data_siswa.destroy', $p->id) }}"method="POST">
                    @csrf
                    @method('DELETE')
                    
                  
                  <div class="modal-body">
                    <p>Apakah Anda yakin untuk menghapus data ini?</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-outline-light">Hapus</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>


@endsection


@section('js')
<script>
  jQuery(document).ready(function($){
      $(".clickable-row").click(function() {
          window.location = $(this).data("href");
      });
  });
</script>

<script>
  $(function () {
      $("#tabeldata").DataTable();
      $("#tabelSuratkeluar").DataTable();
      $("#tabelAgendaMasuk").DataTable();
      $("#tabelAgendaKeluar").DataTable();
      $("#tabelKlasifikasi").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
      });
  });

  $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
          event.preventDefault();
          $(this).ekkoLightbox({
              alwaysShowClose: true
          });
      });

      $('.filter-container').filterizr({
          gutterPixels: 3
      });
      $('.btn[data-filter]').on('click', function () {
          $('.btn[data-filter]').removeClass('active');
          $(this).addClass('active');
      });
  });
</script>


@endsection