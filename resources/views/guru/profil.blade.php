@extends('admin/admin')

@section('css')
    
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Profil saya</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">guru</a></li>
          <li class="breadcrumb-item active">Profil saya</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')

<div class="card">
  @foreach ($data as $g)
  <form action="/guru/profil/{{$g->nuptk}}" method="POST">
    @method('PUT')
    @csrf
    <div class="card-body"> 
      <dl class="row ">
      <dl class="input-group mb-3">
        <dt class="col-sm-4">Nama Guru</dt>
        <dd class="col-sm-5">{{$g->nama}}</dd>
        <dt class="col-sm-4">Jabatan</dt>
        <dd class="col-sm-5">{{$g->jabatan}}</dd>
        <dt class="col-sm-4">NUPTK</dt>
        <dd class="col-sm-5">{{$g->nuptk}}</dd>
        <dt class="col-sm-4">Jenis Kelamin</dt>
        <dd class="col-sm-5">{{$g->jenis_kelamin}}</dd>
        <dt class="col-sm-4">Tempat dan Tanggal Lahir</dt>
        <dd class="col-sm-5">{{$g->ttl}}</dd>
        <dt class="col-sm-4">Agama</dt>
        <dd class="col-sm-5"><input type="text" name="agama" class="form-control" value="{{$g->agama}} "></dd>
        <dt class="col-sm-4">Pendidikan</dt>
        <dd class="col-sm-5">{{$g->pendidikan}}</dd>
        <dt class="col-sm-4">Email</dt>
        <dd class="col-sm-5"><input type="text" name="email" class="form-control" value="{{$g->email}} "></dd>
        <dt class="col-sm-4">Telephone</dt>
        <dd class="col-sm-5"><input type="number" name="telephone" class="form-control" value="{{$g->telephone}}"></dd>
        <dt class="col-sm-4">Alamat</dt>
        <dd class="col-sm-5">
          <textarea name="alamat" id="" cols="30" rows="5" class="form-control" value="" placeholder="jalan, desa/kelurahan, kecamatan, kabupaten/kota">{{$g->alamat}}</textarea>
            {{-- <input type="text " class="form-control" name="alamat" value="{{$g->alamat}}" placeholder="Jalan">
            <input type="text " class="form-control" name="alamat" value="{{$g->alamat}}" placeholder="Desa/Kelurahan" >
            <input type="text " class="form-control" name="alamat" value="{{$g->alamat}}" placeholder="Kecamatan">
            <input type="text " class="form-control" name="alamat" value="{{$g->alamat}}" placeholder="Kabupaten/Kota"> --}}
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
    <br>

    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Profil</h1>
          </div>

    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dl class="input-group mb-3">
                    <dt class="col-sm-4">Password Lama</dt>
                    <dd class="col-sm-5"><input type="text" placeholder="masukkan password lama" class="form-control"value=""></dd>
                    <dt class="col-sm-4">Password Baru</dt>
                    <dd class="col-sm-5"><input type="text" placeholder="masukkan password baru" class="form-control" value=" "></dd>
                    <dt class="col-sm-4">Masukkan Lagi</dt>
                    <dd class="col-sm-5"><input type="text" placeholder="masukkan password baru" class="form-control" value=" "></dd>
                    {{-- <dt class="col-sm-4">Email</dt>
                    <dd class="col-sm-5"><input type="text" class="form-control" value=" "></dd> --}}
                    <dt class="col-sm-4"></dt>
                    {{-- <dd class="col-sm-2">
                        <a href="/guru/ubahemail">
                            <button type="button" class="btn btn-block btn-primary" >Ubah email</button>
                        </a>
                    </dd> --}}
                    <dd class="col-sm-2">
                        <a href="/guru/ubahpassword">
                            <button type="button" class="btn btn-block btn-primary" >Ubah password</button>

                        </a>
                    </dd>
                </dl>
            </dl>
        </div>
    </div>
    
@endsection