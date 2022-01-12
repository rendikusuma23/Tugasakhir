@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Raport</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Operator</a></li>
          <li class="breadcrumb-item active">Raport</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Raport Siswa</h3><br>
        <!-- select -->
        <form action="/filter/raportoperator" method="post">
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
          <button type="submit" class="btn btn-primary btn-sm m-1 ">Tampil </button>
        </form>
 
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap table-hover" id="tabeldata">
          <thead>
            <tr>
              <th>NO</th>
              <th>No Induk</th>
              <th>Nama</th>
              <th>Kelompok</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr class="clickable-row" data-href="/operator/raport/{{$p->id}}">
            <td>{{$no++}}</td>
            <td>{{$p->no_induk}}</td>
            <td>{{$p->nama_lengkap}}</td>
            <td>{{$p->kelas}}</td>

          </tr>
          @endforeach
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
<script>
  jQuery(document).ready(function($){
      $(".clickable-row").click(function() {
          window.location = $(this).data("href");
      });
  });
  </script>
@endsection