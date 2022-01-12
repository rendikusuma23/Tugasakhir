@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Perkembangan Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Guru</a></li>
          <li class="breadcrumb-item active"> Perkembangan Siswa </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <p>Nama &nbsp:{{$siswa->nama_lengkap}}</p>
  <p>Kelas &nbsp &nbsp:{{$siswa->kelas}}</p>

<form action="/guru/filter/perkembangan/{{$id}}" method="post">
  @csrf
  <div class="float-sm-left form-group" >
    <select class="form-control"name="bulan">
    <option value="Semua">Semua Bulan</option>
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
  </div>
  <button type="submit" class="btn btn-primary btn-sm m-1 ">Tampil </button>
</form>
</div>

<div class="card-body table " >
    <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example3">
      <thead>
        <tr >
          <th>NO</th>
          <th>Bulan</th>
          <th>Lingkup Perkembangan</th>
          <th>Kompetisi Indikator</th>
          <th>Kegiatan Anak</th>
          <th>Hasil Karya</th>
          <th>Hasil Akhir</th>
          <th>Kesimpulan</th>
        </tr>
      </thead>
      <tbody>
        @php
                $no=1;
            @endphp
            @foreach ($data as $g)
            <tr>
              <td>{{$no++}}</td>
            <td>{{$g->bulan}}</td>
            <td >{{$g->lingkup_perkembangan}}</td>
            <td >{{$g->nama}}</td>
            <td >{{$g->kegiatan_anak}}</td>
            <td >{{$g->hasil_karya}}</td>
            <td >{{$g->hasil_akhir}}</td>
            <td >{{$g->kesimpulan}}</td>

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