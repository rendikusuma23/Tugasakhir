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

<div class="card">
    <form action="/operator/kompetisiindikator" method="POST">
      @csrf
<div class="card-body">
    <dl class="row ">
      <dl class="input-group mb-3">
        <dt class="col-sm-4">Nama kompetisi indikator</dt>
        <dd class="col-sm-5"><input type="text" name="nama" class="form-control"></dd>
        <dt class="col-sm-4">Lingkup Perkembangan</dt>
        <dd class="col-sm-5">
            <select name="lingkup_perkembangan" class="form-control" >
                @foreach ($lingkup as $g)   
                <option value="{{$g->id}}">{{$g->nama}}</option>
                @endforeach
                </select>
        </dd>
        <dt class="col-sm-4">Bulan</dt>
        <dd class="col-sm-5">
            <select name="bulan" class="form-control">   
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>  
                <option>November</option>  
                <option>Desember</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>   
                </select>
        </dd>
      </dl>
      </dl>
      <dt class="col-sm-4"></dt>
      <dd class="col-sm-2">
          <button type="submit" class="btn btn-block btn-success ">Simpan</button>
      </dd>
  </form>
  {{-- @endforeach    --}}
  </div>
</div>
@endsection
