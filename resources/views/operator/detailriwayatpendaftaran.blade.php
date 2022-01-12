@extends('admin/admin')

@section('css')

@endsection

@section('content')
<section class="content">
    <div class="card">
      @foreach ($pendaftaran as $p)
      <form action="/operator/pendaftaran/{{$p->id_jenis}}"method="POST">
        @method('PUT')
        <div class="card-body ml-5">
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4"> Jenis Tingkatan</dt>
              <dd class="col-sm-5">{{ $p->jenis_tingkatan}}</dd>
            </dl>
          </dl>
          <center><h3 >Identitas</h3><br></center>
          <form action="pendaftaran" method="POST">
            @csrf
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Nama Lengkap</dt>
              <dd class="col-sm-5">{{$p->nama_lengkap}}</dd>
              <dt class="col-sm-4">NIK</dt>
              <dd class="col-sm-5">{{$p->NIK_siswa}}</dd>
              <dt class="col-sm-4">Jenis Kelamin</dt>
              <dd class="col-sm-5">{{$p->jenis_kelamin}}</dd>
              <dt class="col-sm-4">Tempat dan Tanggal Lahir</dt>
              <dd class="col-sm-5">{{$p->ttl}}</dd>
              <dt class="col-sm-4">Agama</dt>
              <dd class="col-sm-5">{{$p->agama}}</dd>
              <dt class="col-sm-4">Anak ke</dt>
              <dd class="col-sm-5">{{$p->anak_ke}}</dd>
              <dt class="col-sm-4">Kewarganegaraan</dt>
              <dd class="col-sm-5">{{$p->kewarganegaraan}}</dd>
              <dt class="col-sm-4">Usia</dt>
              <dd class="col-sm-5">{{$p->usia}}</dd>        
              <dt class="col-sm-4">Email</dt>
              <dd class="col-sm-5">{{$p->email}}</dd>        
              <dt class="col-sm-4">Telephone</dt>
              <dd class="col-sm-5">{{$p->telephone}}</dd>
              <dt class="col-sm-4">Alamat Lengkap</dt>
              <dd class="col-sm-5">{{$p->alamat_lengkap}}</dd>
            </dl>
          </dl>
          <center><h3 >Orang Tua</h3> </center><br>
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Nama Ayah</dt>
              <dd class="col-sm-5">{{$p->nama_ayah}}</dd>
              <dt class="col-sm-4">NIK</dt>
              <dd class="col-sm-5">{{$p->NIK_ayah}}</dd>
              <dt class="col-sm-4">Tahun Lahir</dt>
              <dd class="col-sm-5">{{$p->tahunlahir_ayah}}</dd>
              <dt class="col-sm-4">Pendidikan</dt>
              <dd class="col-sm-5">{{$p->pendidikan_ayah}}</dd>
              <dt class="col-sm-4">Pekerjaan</dt>
              <dd class="col-sm-5">{{$p->pekerjaan_ayah}}</dd>
              <dt class="col-sm-4">Nama Ibu</dt>
              <dd class="col-sm-5">{{$p->nama_ibu}}</dd>
              <dt class="col-sm-4">NIK</dt>
              <dd class="col-sm-5">{{$p->NIK_ibu}}</dd>
              <dt class="col-sm-4">Tahun Lahir</dt>
              <dd class="col-sm-5">{{$p->tahunlahir_ibu}}</dd>
              <dt class="col-sm-4">Pendidikan</dt>
              <dd class="col-sm-5">{{$p->pendidikan_ibu}}</dd>
              <dt class="col-sm-4">Pekerjaan</dt>
              <dd class="col-sm-5">{{$p->pekerjaan_ibu}}</dd>
            </dl>
          </dl>
  
          <center><h3 >Periodik</h3> </center><br>
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Tinggi Badan</dt>
              <dd class="col-sm-5">{{$p->tinggi_badan}}</dd>
              <dt class="col-sm-4">Berat Badan</dt>
              <dd class="col-sm-5">{{$p->berat_badan}}</dd>
              <dt class="col-sm-4">Jarak Tempuh</dt>
              <dd class="col-sm-5">{{$p->jarak_tempuh}}</dd>
              <dt class="col-sm-4">Jumlah Saudara</dt>
              <dd class="col-sm-5">{{$p->jumlah_saudara}}</dd>
              <br>
            </dl>
          </dl>
  
          <center><h3 >Register</h3> </center><br>
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Jenis pendaftaran</dt>
              <dd class="col-sm-5">{{$p->jenis_pendaftaran}}</dd>
              <dt class="col-sm-4">No Induk Siswa</dt>
              <dd class="col-sm-5">{{$p->no_induk}}</dd>
              <dt class="col-sm-4">Masuk Rombel</dt>
              <dd class="col-sm-5">{{ $p->masuk_rombel}}</dd>              
              <br>
              <dt class="col-sm-4"></dt>
            </dl>
          </dl>
        </form>
        </div>
      </form>
       
      @endforeach
        
      </div>
  </section>
    
@endsection

@section('js')
    
@endsection