@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Raport Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Guru</a></li>
          <li class="breadcrumb-item active">Raport Siswa</li>
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

      

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap">
          <thead>
            <tr >
              <th>NO</th>
              <th>No Induk</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Kelompok/Kelas</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr class="clickable-row" data-href="/guru/raport/{{$p->id}}">
            <td>{{$no++}}</td>
            <td>{{$p->no_induk}}</td>
            <td>{{$p->nama_lengkap}}</td>
            <td>{{$p->jenis_kelamin}}</td>
            <td>{{$p->kelas}}</td>
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

@endsection