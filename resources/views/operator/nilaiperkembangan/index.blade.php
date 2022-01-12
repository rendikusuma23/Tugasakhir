@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Nilai Perkembangan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Nilai Perkembangan </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">

<form action="/operator/filter/nilaiperkembangan" method="post">
  @csrf
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
  {{-- <div class="float-sm-left form-group" >
    <select class="form-control"name="kelas">
    <option value="Semuabulan">Semua Bulan</option>
    <option value="Agustus">Agustus</option>
    <option value="September">September</option>
    <option value="Oktober">Oktober</option>
    <option value="November">November</option>
    <option value="Desember">Desember</option>
    <option value="Januari">Januari</option>
    <option value="Februari">Februari</option>
    <option value="Maret">Maret</option>
    <option value="April">April</option>
    <option value="Mei">Mei</option>

    </select>
  </div> --}}
  <button type="submit" class="btn btn-primary btn-sm m-1 ">Tampil </button>
</form>
</div>

<div class="card-body table" style="height: 350px;">
    <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="tabeldata">
      <thead>
        <tr >
          <th>NO</th>
          <th>Nama</th>
          <th>Kelas</th>
          {{-- <th>Kegiatan Anak</th>
          <th>Hasil Karya</th>
          <th>Hasil Akhir</th>
          <th>Kesimpulan</th>
          <th>Aksi</th> --}}
        </tr>
      </thead>
      <tbody>
        @php
                $no=1;
            @endphp
            @foreach ($data as $g)
            <tr class="clickable-row" data-href="/operator/nilaiperkembangan/{{$g->id}}">
              <td>{{$no++}}</td>
            <td>{{$g->nama_lengkap}}</td>
            <td >{{$g->kelas}}</td>
            @endforeach

    </tbody>
</table>
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
@endsection