@extends('admin/admin')

@section('css')
    
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Laporan Bulanan Perkembangan Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Guru</a></li>
          <li class="breadcrumb-item active">Laporan Bulanan Perkembangan Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')

      <div class="col-12">
        <p>Nama &nbsp:{{$siswa->nama_lengkap}}</p>
        <p>Kelas &nbsp &nbsp:{{$siswa->kelas}}</p>
      </div>

    <form action="/filter/perkembangan/{{ $id }}" method="post">
          @csrf
        <div class="col-12" >
        <div class="float-sm-left form-group" >
          <select class="form-control" name="bulan">
          <option value="Semua"{{ $bulan === 'Semua' ? 'selected' : ''}}>Pilih Bulan</option>
          <option value="Januari"{{ $bulan === 'Januari' ? 'selected' : ''}}>Januari</option>
          <option value="Februari"{{ $bulan === 'Februari' ? 'selected' : ''}}>Februari</option>
          <option value="Maret"{{ $bulan === 'Maret' ? 'selected' : ''}}>Maret</option>
          <option value="April"{{ $bulan === 'April' ? 'selected' : ''}}>April</option>
          <option value="Mei"{{ $bulan === 'Mei' ? 'selected' : ''}}>Mei</option>
          <option value="Agustus"{{ $bulan === 'Agustus' ? 'selected' : ''}}>Agustus</option>
          <option value="September"{{ $bulan === 'September' ? 'selected' : ''}}>September</option>
          <option value="Oktober"{{ $bulan === 'Oktober' ? 'selected' : ''}}>Oktober</option>
          <option value="November"{{ $bulan === 'November' ? 'selected' : ''}}>November</option>
          <option value="Desember"{{ $bulan === 'Desember' ? 'selected' : ''}}>Desember</option>
          </select>
      </div>
      </div>
            <button type="submit" class="btn btn-primary btn-sm m-1 ">Tampil </button>
    </form>
      <!-- /.card-header -->
      <!-- <div class="card-body table table-responsive p-0"" style="height: 400px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example3">
          <thead>
            <tr >
              <th>NO</th>
              <th>Lingkup Perkembangan</th>
              <th>Kompetisi dan Indikator</th>
              <th>Kegiatan Anak</th>
              <th>Hasil Karya</th>
              <th>Hasil Akhir</th>
              <th>Kesimpulan</th>
            </tr>
          </thead>
          <tbody>
             <tr>
              <td>1</td>
              <td>Nilai Agama dan Moral</td>
              <td>Terbiasa menyebut nama tuhan sebagai pencipta</td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>              </td>
            </tr>
            
            <tr>
              <td>2</td>
              <td>Fisik Motorik</td>
              <td>Terbiasa melakukan kegiatan kebersihan diri</td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td> 
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td> 
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td>Sosial Emosional</td>
              <td>Memiliki perilaku yang bersifat percaya diri</td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td> 
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Kognitif</td>
              <td>Mengenal benda dengan mengelompokkan benda di lingkungan</td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td> 
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Bahasa</td>
              <td>Terbiasa ramah menyapa siapapun</td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td> 
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Seni</td>
              <td>Membuat karya seni sesuai kreatifitasnya</td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td>
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
              <td> 
                <select name="" class="form-control">
                  <option>Pilih Keterangan</option>
                  <option>BB</option>
                  <option>MB</option>  
                  <option>BSH</option>  
                  <option>BSB</option>  
                  </select>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-12 p-3">
      <div class="float-sm-right">
        <button type="submit" class="btn btn-block btn-success">Simpan</button>
      </div>
    </div> -->
    <form action="/perkembangan/{{ $id }}/{{ $bulan }}" method="post">
      @csrf
        <div class="col-12 m-1">
          <div class="row bg-primary p-2">
            <div class="col-2">
              <h4>Lingkup Perkembangan</h4>
            </div>
            <div class="col-10">
              <div class="row">
                <div class="col-4">
                <h4>Kompetensi dan Indikator</h4>
                </div>
                <div class="col-2">
                <p>Kegiatan Anak</p>
                </div>
                <div class="col-2">
                <p>Hasil Karya</p>
                </div>
                <div class="col-2">
                <p>Hasil Akhir</p>
                </div>
                <div class="col-2">
                <h4>Kesimpulan</h4>      
                </div>
              </div>
            </div>
          </div>
          @foreach($lingkup as $lk)
          <div class="row mb-1 bg-info">
            <div class="col-2 mt-2">
              <p>{{$lk->nama}}</p>
            </div>
            <div class="col-10">
            @foreach($kompetensi as $k)
            @if($k->lingkup_perkembangan==$lk->id)
            <div class="row m-2">
                <div class="col-4">
                <p>{{ $k->nama }}</p>
                </div>
                <div class="col-2">
                  <select name="ka{{ $k->id }}" class="form-control" required>
                      <option>Pilih Keterangan</option>
                      <option>BB</option>
                      <option>MB</option>  
                      <option>BSH</option>  
                      <option>BSB</option>  
                  </select>
                </div>
                <div class="col-2">
                  <select name="hk{{ $k->id }}" class="form-control" required>
                      <option>Pilih Keterangan</option>
                      <option>BB</option>
                      <option>MB</option>  
                      <option>BSH</option>  
                      <option>BSB</option>  
                  </select>
                </div>
                <div class="col-2">
                  <select name="ha{{ $k->id }}" class="form-control" required>
                      <option>Pilih Keterangan</option>
                      <option>BB</option>
                      <option>MB</option>  
                      <option>BSH</option>  
                      <option>BSB</option>  
                  </select>
                </div>
                <div class="col-2">
                  <select name="kesimpulan{{ $k->id }}" class="form-control sm" required>
                      <option>Pilih Keterangan</option>
                      <option>Belum Berkembang</option>
                      <option>Mulai Berkembang</option>  
                      <option>Berkembang Sesuai Harapan</option>  
                      <option>Berkembang Sangat Baik</option>  
                  </select>
                </div>
              </div>  
            @endif
            @endforeach
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-12 p-3">
          <div class="float-sm-right">
            <button type="submit" class="btn btn-block btn-success">Simpan</button>
          </div>
        </div>   
    </form>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Keterangan</h5>
      BB    : Belum berkembang || MB    : Mulai berkembang || BSH   : Berkembang sesuai harapan || BSB   : Berkembang sangat baik
    </div>
@endsection

@section('js')
    
@endsection