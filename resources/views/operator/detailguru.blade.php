@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Detail Data Guru</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Detail Guru</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

<div class="card">
  @foreach ($guru as $g)
  <form action="/operator/dataguru/{{$g->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="card-body"> 
      <dl class="row ">
      <dl class="input-group mb-3">
        <dt class="col-sm-4">Nama Guru</dt>
        <dd class="col-sm-5"><input type="text" name="nama" class="form-control"value="{{$g->nama}}"></dd>
        <dt class="col-sm-4">Jabatan</dt>
        <dd class="col-sm-5"><input type="text" name="jabatan" class="form-control" value="{{$g->jabatan}} "></dd>
        <dt class="col-sm-4">NUPTK</dt>
        <dd class="col-sm-5"><input type="number" name="nuptk" class="form-control" value="{{$g->nuptk}}"></dd>
        <dt class="col-sm-4">Jenis Kelamin</dt>
        <dd class="col-sm-5">
          <select class="form-control" name="jenis_kelamin" value="{{$g->jenis_kelamin}}">
              <option>Laki-Laki</option>
              <option>Perempuan</option>  
              </select>
                  </dd>
        <dt class="col-sm-4">Tempat dan Tanggal Lahir</dt>
        <dd class="col-sm-5"><input type="text" name="ttl" class="form-control" value="{{$g->ttl}} "></dd>
        <dt class="col-sm-4">Agama</dt>
        <dd class="col-sm-5"><input type="text" name="agama" class="form-control" value="{{$g->agama}} "></dd>
        <dt class="col-sm-4">Pendidikan</dt>
        <dd class="col-sm-5"><input type="text" name="pendidikan" class="form-control" value="{{$g->pendidikan}} "></dd>
        <dt class="col-sm-4">Email</dt>
        <dd class="col-sm-5"><input type="text" name="email" class="form-control" value="{{$g->email}} "></dd>
        <dt class="col-sm-4">Telephone</dt>
        <dd class="col-sm-5"><input type="number" name="telephone" class="form-control" value="{{$g->telephone}}"></dd>
        <dt class="col-sm-4">Alamat</dt>
        <dd class="col-sm-5">
          <textarea name="alamat" id="" cols="30" rows="5" class="form-control" value="" placeholder="jalan, desa/kelurahan, kecamatan, kabupaten/kota">{{$g->alamat}}</textarea>
        </dd>
      </dl>
      <dt class="col-sm-4"></dt>
      <dd class="col-sm-2">
          <button type="submit" class="btn btn-block btn-success">Simpan</button>
      </dd>
    </div>
  </form>
  @endforeach
  
</div>
@endsection