@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Guru</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Data Guru</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection


@section('content')

@if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Guru</h3><br>
        <div class="col-2  p-1 float-sm-right">
          <a href="/operator/dataguru/create">
            <button type="button" class="btn btn-block btn-success btn-sm ">Tambah Data </button>
          </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="tabeldata">
          <thead>
            <tr >
              <th>NO</th>
              <th>Nama</th>
              <th>NUPTK</th>
              <th>Jabatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($data as $g)
            <tr class="clickable-row" data-href="/operator/dataguru/{{$g->id}}">
              <td>{{$no++}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->nuptk}}</td>
            <td>{{$g->jabatan}}</td>
            <td>
              <a href="">
                <button type="button" class="btn btn-danger btn-sm m-1 ">Hapus </button>
              </a>
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

{{-- <script>
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

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script> --}}


@endsection