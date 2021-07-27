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
              <dt class="col-sm-4">Pilih Jenis Tingkatan</dt>
              <dd class="col-sm-5">
                <select name="jenis_tingkatan" id="" class="form-control">
                  <option value="kelompok bermain" {{ $p->jenis_tingkatan === 'kelompok bermain' ? 'selected' : ''}}>Kelompok Bermain</option>
                  <option value="taman kanak-kanak" {{ $p->jenis_tingkatan === 'taman kanak-kanak' ? 'selected' : ''}}>Taman Kanak-kanak</option>  
                </select>
              </dd>
            </dl>
          </dl>
          <center><h3 >Identitas</h3><br></center>
          <form action="pendaftaran" method="POST">
            @csrf
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Nama Lengkap</dt>
              <dd class="col-sm-5"><input type="text" name="nama_lengkap" class="form-control"value="{{$p->nama_lengkap}}"></dd>
              <dt class="col-sm-4">NIK</dt>
              <dd class="col-sm-5"><input type="number" name="NIK_siswa" class="form-control" value="{{$p->NIK_siswa}}"></dd>
              <dt class="col-sm-4">Jenis Kelamin</dt>
              <dd class="col-sm-5">
                <select name="jenis_kelamin" id="" class="form-control">
                  <option value="laki-laki" {{ $p->jenis_kelamin === 'laki-laki' ? 'selected' : ''}}>Laki-Laki</option>
                  <option value="perempuan" {{ $p->jenis_kelamin === 'perempuan' ? 'selected' : ''}}>Perempuan</option>  
                </select>
              </dd>
              <dt class="col-sm-4">Tempat dan Tanggal Lahir</dt>
              <dd class="col-sm-5"><input type="text" name="ttl" class="form-control" value="{{$p->ttl}}"></dd>
              <dt class="col-sm-4">Agama</dt>
              <dd class="col-sm-5">
                <select name="agama" id="" class="form-control">
                    <option value="Islam" {{ $p->agama === 'Islam' ? 'selected' : ''}}>Islam</option>
                    <option value="Hindu" {{ $p->agama === 'Hindu' ? 'selected' : ''}}>Hindu</option>
                    <option value="Kristen" {{ $p->agama === 'Kristen' ? 'selected' : ''}}>Kristen</option>  
                    <option value="Katholik" {{ $p->agama === 'Katholik' ? 'selected' : ''}}>Katholik</option>  
                    <option value="Konghuchu" {{ $p->agama === 'Konghuchu' ? 'selected' : ''}}>Konghuchu</option>  
        
                    </select>
                        </dd>
              {{-- <dd class="col-sm-5"><input type="text" name="agama" class="form-control" value=" "></dd> --}}
              <dt class="col-sm-4">Anak ke</dt>
              <dd class="col-sm-5"><input type="text" name="anak_ke" class="form-control" value="{{$p->anak_ke}}"></dd>
              <dt class="col-sm-4">Kewarganegaraan</dt>
              <dd class="col-sm-5"><input type="text " name="kewarganegaraan" class="form-control" value="{{$p->kewarganegaraan}}"></dd>
              <dt class="col-sm-4">Usia</dt>
              <dd class="col-sm-5"><input type="text " name="usia" class="form-control" value="{{$p->usia}}"></dd>        
              <dt class="col-sm-4">Email</dt>
              <dd class="col-sm-5"><input type="text " name="email" class="form-control" value="{{$p->email}}"></dd>        
              <dt class="col-sm-4">Telephone</dt>
              <dd class="col-sm-5"><input type="number" name="telephone" class="form-control" value="{{$p->telephone}}"></dd>
              <dt class="col-sm-4">Alamat Lengkap</dt>
              <dd class="col-sm-5">
                <textarea name="alamat_lengkap" id="" cols="30" rows="5" class="form-control" value="" placeholder="jalan, desa/kelurahan, kecamatan, kabupaten/kota">{{$p->alamat_lengkap}}</textarea>

                {{-- <input name="alamat_lengkap" type="text " class="form-control" value="{{$p->alamat_lengkap}}" placeholder="Jalan">
                <input name="alamat_lengkap" type="text " class="form-control" value="{{$p->alamat_lengkap}}" placeholder="Desa/Kelurahan" >
                <input name="alamat_lengkap" type="text " class="form-control" value="{{$p->alamat_lengkap}}" placeholder="Kecamatan">
                <input name="alamat_lengkap" type="text " class="form-control" value="{{$p->alamat_lengkap}}" placeholder="Kabupaten/Kota"> --}}
              </dd>
            </dl>
          </dl>
          <center><h3 >Orang Tua</h3> </center><br>
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Nama Ayah</dt>
              <dd class="col-sm-5"><input name="nama_ayah" type="text" class="form-control"value="{{$p->nama_ayah}}"></dd>
              <dt class="col-sm-4">NIK</dt>
              <dd class="col-sm-5"><input name="NIK_ayah" type="number" class="form-control" value="{{$p->NIK_ayah}}"></dd>
              <dt class="col-sm-4">Tahun Lahir</dt>
              <dd class="col-sm-5"><input name="tahunlahir_ayah" type="text" class="form-control" value="{{$p->tahunlahir_ayah}}"></dd>
              <dt class="col-sm-4">Pendidikan</dt>
              <dd class="col-sm-5"><input name="pendidikan_ayah" type="text" class="form-control" value="{{$p->pendidikan_ayah}}"></dd>
              <dt class="col-sm-4">Pekerjaan</dt>
              <dd class="col-sm-5"><input name="pekerjaan_ayah" type="text" class="form-control" value="{{$p->pekerjaan_ayah}}"></dd>
              <dt class="col-sm-4">Nama Ibu</dt>
              <dd class="col-sm-5"><input name="nama_ibu" type="text" class="form-control"value="{{$p->nama_ibu}}"></dd>
              <dt class="col-sm-4">NIK</dt>
              <dd class="col-sm-5"><input name="NIK_ibu" type="number" class="form-control" value="{{$p->NIK_ibu}}"></dd>
              <dt class="col-sm-4">Tahun Lahir</dt>
              <dd class="col-sm-5"><input name="tahunlahir_ibu" type="text" class="form-control" value="{{$p->tahunlahir_ibu}}"></dd>
              <dt class="col-sm-4">Pendidikan</dt>
              <dd class="col-sm-5"><input name="pendidikan_ibu" type="text" class="form-control" value="{{$p->pendidikan_ibu}}"></dd>
              <dt class="col-sm-4">Pekerjaan</dt>
              <dd class="col-sm-5"><input name="pekerjaan_ibu" type="text" class="form-control" value="{{$p->pekerjaan_ibu}}"></dd>
            </dl>
          </dl>
  
          <center><h3 >Periodik</h3> </center><br>
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Tinggi Badan</dt>
              <dd class="col-sm-5"><input name="tinggi_badan" type="text" class="form-control" value="{{$p->tinggi_badan}}"></dd>
              <dt class="col-sm-4">Berat Badan</dt>
              <dd class="col-sm-5"><input name="berat_badan" type="text" class="form-control" value="{{$p->berat_badan}}"></dd>
              <dt class="col-sm-4">Jarak Tempuh</dt>
              <dd class="col-sm-5"><input name="jarak_tempuh" type="text" class="form-control" value="{{$p->jarak_tempuh}}"></dd>
              <dt class="col-sm-4">Jumlah Saudara</dt>
              <dd class="col-sm-5"><input name="jumlah_saudara" type="text" class="form-control" value="{{$p->jumlah_saudara}}"></dd>
              <br>
            </dl>
          </dl>
  
          <center><h3 >Register</h3> </center><br>
          <dl class="row ">
            <dl class="input-group mb-3">
              <dt class="col-sm-4">Jenis pendaftaran</dt>
              <dd class="col-sm-5">
                <select name="jenis_pendaftaran" id="" class="form-control" >
                  <option value="Siswa Baru" {{ $p->jenis_pendaftaran === 'Siswa Baru' ? 'selected' : ''}}>Siswa Baru</option>
                  <option value="Pindahan" {{ $p->jenis_pendaftaran === 'Pindahan' ? 'selected' : ''}}>Pindahan</option>
                  <option value="Sekolah Lagi" {{ $p->jenis_pendaftaran === 'Sekolah' ? 'selected' : ''}}>Sekolah Lagi</option>    
                </select>
              </dd>
              <dt class="col-sm-4">No Induk Siswa</dt>
              <dd class="col-sm-5"><input name="no_induk" type="text" class="form-control" value="{{$p->no_induk}}"></dd>
              <dt class="col-sm-4">Masuk Rombel</dt>
              <dd class="col-sm-5">
              <select name="masuk_rombel" class="form-control" >
                <option value="A) 4-5 Tahun" {{ $p->masuk_rombel === '(A) 4-5 Tahun' ? 'selected' : ''}}>(A) 4-5 Tahun</option>
                <option value="(B) 5-6 Tahun" {{ $p->masuk_rombel === '(B) 5-6 Tahun' ? 'selected' : ''}}>(B) 5-6 Tahun</option>
                <option value="(C) 3 Tahun" {{ $p->masuk_rombel === '(C) 3 Tahun' ? 'selected' : ''}}>(C) 3 Tahun</option>
              </select>
              </dd>
              <dt class="col-sm-4">Pilih Kelas</dt>
              <dd class="col-sm-5">
                <select name="kelas" id="" class="form-control">
                  <option value="Kelompok A1" {{ $p->kelas === 'Kelompok A1' ? 'selected' : ''}}>Kelompok A1</option>
                  <option value="Kelompok A2" {{ $p->kelas === 'Kelompok A2' ? 'selected' : ''}}>Kelompok A2</option>
                  <option value="Kelompok A3" {{ $p->kelas === 'Kelompok A3' ? 'selected' : ''}}>Kelompok A3</option>
                  <option value="Kelompok A4" {{ $p->kelas === 'Kelompok A4' ? 'selected' : ''}}>Kelompok A4</option>
                  <option value="Kelompok B1" {{ $p->kelas === 'Kelompok B1' ? 'selected' : ''}}>Kelompok B1</option>
                  <option value="Kelompok B2" {{ $p->kelas === 'Kelompok B2' ? 'selected' : ''}}>Kelompok B2</option>
                  <option value="Kelompok B3" {{ $p->kelas === 'Kelompok B3' ? 'selected' : ''}}>Kelompok B3</option>
                  <option value="Kelompok B4" {{ $p->kelas === 'Kelompok B4' ? 'selected' : ''}}>Kelompok B4</option>
                  <option value="Kepompong" {{ $p->kelas === 'Kepompong' ? 'selected' : ''}}>Kepompong</option>
                  <option value="Kupu-kupu" {{ $p->kelas === 'Kupu-kupu' ? 'selected' : ''}}>Kupu-kupu</option>

                </select>
                </dd>
              <dt class="col-sm-4">Status</dt>
              <dd class="col-sm-5">
                <select name="status" class="form-control" value="{{$p->status}}">
                  <option> Belum Verifikasi</option>
                  <option> Diterima</option>
                </select>
                </dd>
              <br>
              <dt class="col-sm-4"></dt>
              <dd class="col-sm-2">
                <button type="submit" class="btn btn-block btn-success">Simpan</button>
              </dd>
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