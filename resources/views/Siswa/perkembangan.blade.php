@extends('admin/admin')

@section('css')
    
@endsection
@section('tittle')
Laporan Bulanan Perkembangan | {{ Auth::user()->name }}
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Laporan Bulanan Perkembangan Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Siswa</a></li>
          <li class="breadcrumb-item active">Laporan Bulanan Perkembangan Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')

<div class="col-12">

  <form action="/siswa/filter/perkembangansiswa/" method="get">
    @csrf
    <div class="float-sm-left form-group" >
      <select class="form-control"name="bulan">
      <option disabled selected value="Semua">== Pilih Bulan ==</option>
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
      
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="perkembangan">
          <thead>
            <tr >
              <th>NO</th>
              <th>Lingkup Perkembangan</th>
              <th>Kompetisi dan Indikator</th>
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
      <div class="col-12 p-3">
    </div>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Keterangan</h5>
      BB    : Belum berkembang ||
      MB    : Mulai berkembang ||
      BSH   : Berkembang sesuai harapan || 
      BSB   : Berkembang sangat baik
    </div>
@endsection

@section('js')
    
@endsection