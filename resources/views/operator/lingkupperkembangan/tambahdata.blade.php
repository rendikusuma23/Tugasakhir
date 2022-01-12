@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tambah data Lingkup Perkembangan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active"> Tambah Data Lingkup Perkembangan </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="row ml-3">

          <form action="pendaftaran" method="POST">
            @csrf
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Nama Lengkap</dt>
              <dd class="col-8"><input type="text" name="nama_lengkap" class="form-control"value=""></dd>
            </dl>
        </form>
@endsection

@section('js')

@endsection