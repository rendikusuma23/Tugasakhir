@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Detail Data Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Detail Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

<div class="card">
  @foreach ($data_siswa as $p)
  <form action="/operator/datasiswa/{{$p->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="card-body">
      <dl class="row ">
        <dl class="input-group mb-3">
          <dt class="col-sm-4">Nama Siswa</dt>
          <dd class="col-sm-5"><input type="text" name="nama_lengkap" class="form-control" value="{{$p->nama_lengkap}}"></dd>
          <dt class="col-sm-4">Kelas</dt>
          <dd class="col-sm-5"><input type="text" name="kelas" class="form-control" value="{{$p->kelas}}"></dd>
          <dt class="col-sm-4">No INDUK</dt>
          <dd class="col-sm-5"><input type="number" name="no_induk" class="form-control" value="{{$p->no_induk}}"></dd>
          <dt class="col-sm-4">Jenis Kelamin</dt>
          <dd class="col-sm-5">
            <select class="form-control" name="jenis_kelamin" value="{{$p->jenis_kelamin}}">
                <option>Laki-Laki</option>
                <option>Perempuan</option>  
            </select>
          </dd>
          <dt class="col-sm-4">Tempat dan Tanggal Lahir</dt>
          <dd class="col-sm-5"><input type="text" name="ttl" class="form-control" value="{{$p->ttl}}"></dd>
          <dt class="col-sm-4">Agama</dt>
          <dd class="col-sm-5"><input type="text" name="agama" class="form-control" value="{{$p->agama}}"></dd>
          <dt class="col-sm-4">Anak ke</dt>
          <dd class="col-sm-5"><input type="text" name="anak_ke" class="form-control" value="{{$p->anak_ke}}"></dd>
          <dt class="col-sm-4">Nama Orang Tua</dt>
          <dd class="col-sm-5"><input type="text " name="nama_ayah" class="form-control" value="{{$p->nama_ayah}}"></dd>
          <dt class="col-sm-4">Pekerjaan Orang Tua/Wali</dt>
          <dd class="col-sm-5"><input type="text " name="pekerjaan_ayah" class="form-control" value="{{$p->pekerjaan_ayah}}"></dd>
          <dt class="col-sm-4">Email</dt>
          <dd class="col-sm-5"><input type="text " name="email" class="form-control" value="{{$p->email}}"></dd>
          <dt class="col-sm-4">Telephone</dt>
          <dd class="col-sm-5"><input type="number" name="telephone" class="form-control" value="{{$p->telephone}}"></dd>
          <dt class="col-sm-4">Alamat Orang Tua/Wali</dt>
          <dd class="col-sm-5">
            <textarea name="alamat_lengkap" id="" cols="30" rows="5" class="form-control" value="" placeholder="jalan, desa/kelurahan, kecamatan, kabupaten/kota">{{$p->alamat_lengkap}}</textarea>
          </dd>
          <dt class="col-sm-4"></dt>
          <dd class="col-sm-2">
              <button type="submit" class="btn btn-block btn-success">Simpan</button>
          </dd>
        </dl>
      </dl>
    </div>
  </form>
  @endforeach
</div>
@endsection