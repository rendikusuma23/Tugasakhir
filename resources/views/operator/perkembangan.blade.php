@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Laporan Bulanan Perkembangan siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Perkembangan siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Bulanan Perkembangan Siswa</h3><br>
        <!-- select -->
        <div class="float-sm-left form-group">
            <select class="form-control">
            <option>Semua kelompok</option>
            <option>Kelompok A1</option>
            <option>Kelompok A2</option>
            <option>Kelompok A3</option>
            <option>Kelompok A4</option>
            <option>Kelompok B1</option>
            <option>Kelompok B2</option>
            <option>Kelompok B3</option>
            <option>Kelompok B4</option>

            </select>
        </div>
        <div class="float-sm-left form-group">
            <select class="form-control">
            <option>Semua Bulan</option>
            <option>Januari</option>
            <option>Februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>Juni</option>
            <option>Juli</option>
            <option>Agustus</option>
            <option>September</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>

            </select>
        </div>
        <div class="float-sm-left form-group">
            <select class="form-control">
            <option>Semua Status</option>
            <option>Belum Lengkap</option>

            </select>
        </div>
 
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap" id="tabeldata">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Bulan</th>
              <th>Kelompok</th>
              <th>No Induk</th>
              <th>status</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$p->nama_lengkap}}</td>
            <td></td>
            <td>{{$p->kelas}}</td>
            <td>{{$p->no_induk}}</td>
          </tr>
          @endforeach
            
              {{-- <td><span class="badge bg-success">Lengkap</span></td>
              <td><span class="badge bg-danger">Belum Lengkap</span></td> --}}
          </tbody>
        </table>
      </div>
      {{-- <div class="col-2  p-2 float-sm-right">
        <button type="button" class="btn btn-block btn-outline-success">Kirim</button>
    </div> --}}
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

@endsection

@section('js')

@endsection