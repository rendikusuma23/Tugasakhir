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
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
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
          <option>Tahun</option>
          <option>2020/2021</option>
          <option>2021/2022</option>

          </select>
      </div>
        <div class="float-sm-left form-group">
            <select class="form-control">
            <option>Semester</option>
            <option>Ganjil</option>
            <option>Genap</option>

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
              <th>No Induk</th>
              <th>Semester</th>
              <th>Kelompok</th>
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
            <td>{{$p->no_induk}}</td>
            <td>{{$p->semester}}</td>
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

@endsection