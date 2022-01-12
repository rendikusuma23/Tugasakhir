@extends('admin/admin')

@section('css')
    
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Akun</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Akun</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')


<div class="col-12">
    <div class="card">
      <div class="card-header">

        <div class="float-sm-left form-group">
          <select class="form-control">
          <option>Semua akun</option>
          <option>Siswa</option>
          <option>Guru</option>

          </select>
      </div>
      <br> 

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 400px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="tabeldata">
          <thead>
            <tr >
              <th>NO</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($data as $g)
            <tr class="clickable-row" data-href="/operator/akun/{{$g->id}}">
              <td>{{$no++}}</td>
            <td>{{$g->name}}</td>
            <td>{{$g->email}}</td>
            <td>
              <a href="/operator/akun/{{$g->id}}">
                <button type="button" class="btn btn-warning btn-sm ">Reset akun </button>
              </a>

                {{-- <a href="">
                  <button type="button" class="btn btn-danger btn-sm m-1 ">Hapus </button>
                </a> --}}
            </td>
            </tr>
                
            @endforeach
            </tr>
          </tbody>
        </table>
      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

    
@endsection