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
          <li class="breadcrumb-item"><a href="/admin">Siswa</a></li>
          <li class="breadcrumb-item active">Laporan Bulanan Perkembangan Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')

<div class="float-sm-left form-group">
    <select class="form-control">
    <option>Semua Bulan</option>
    <option>Januari</option>
    <option>Februari</option>
    <option>Maret</option>
    <option>April</option>
    <option>Mei</option>
    <option>Juni</option>
    <option>Juli</option>
    <option>Agustus</option>
    <option>September</option>
    <option>Oktober</option>
    <option>November</option>
    <option>Desember</option>

    </select>
</div>
    
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 400px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap">
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
            <tr class="clickable-row" data-href="/operator/bayar">
              <td>1</td>
              <td>Nilai Agama dan Moral</td>
              <td>Terbiasa menyebut nama tuhan sebagai pencipta</td>
              <td> BSH</td>
              <td>BSH</td>
              <td>BSH</td>
              <td> </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Fisik Motorik</td>
              <td>Terbiasa melakukan kegiatan kebersihan diri</td>
              <td> </td>
              <td> </td>
              <td></td>
              <td> </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sosial Emosional</td>
              <td>Memiliki perilaku yang bersifat percaya diri</td>
              <td> </td>
              <td></td>
              <td></td>
              <td> </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Kognitif</td>
              <td>Mengenal benda dengan mengelompokkan benda di lingkungan</td>
              <td></td>
              <td></td>
              <td></td>
              <td> </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Bahasa</td>
              <td>Terbiasa ramah menyapa siapapun</td>
              <td></td>
              <td></td>
              <td></td>
              <td> </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Seni</td>
              <td>Membuat karya seni sesuai kreatifitasnya</td>
              <td></td>
              <td></td>
              <td></td>
              <td> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-12 p-3">
    </div>
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-info"></i> Keterangan</h5>
      BB    : Belum berkembang ||
      MB    : Mulai berkembang ||
      BSH   : Berkembang sesuai harapan || 
      BSB   : Berkembang sangat baik
    </div>
@endsection

@section('js')
    
@endsection