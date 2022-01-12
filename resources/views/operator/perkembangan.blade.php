@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Laporan Bulanan Perkembangan siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Perkembangan siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-lg-4 col-6">
  <!-- small card -->
  <div class="small-box " style="background-color: #27b183">
    <div class="inner">
      <h4 style="color: #ffff">Lingkup Perkembangan</h4>

      <p style="color: #27b183">br</p>
    </div>
    <div class="icon">
      <i class="far fa-bookmark"></i>
    </div>
    <a href="/operator/lingkupperkembangan" class="small-box-footer">
      Kelola Data <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</div>
  <!-- /.col -->
  
  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box " style="background-color: #27b183">
      <div class="inner">
        <h4 style="color: #ffff">Kompetisi dan Indikator</h4>

        <p style="color: #27b183">.</p>
      </div>
      <div class="icon">
        <i class="far fa-bookmark"></i>
      </div>
      <a href="/operator/kompetisiindikator" class="small-box-footer">
        Kelola Data <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- /.col -->

  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box "style="background-color: #27b183">
      <div class="inner">
        <h4 style="color: #ffff">Nilai Perkembangan</h4>

        <p><br></p>
      </div>
      <div class="icon">
        <i class="far fa-bookmark"></i>
      </div>
      <a href="/operator/nilaiperkembangan" class="small-box-footer">
        Kelola Data <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- /.col -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

@endsection

@section('js')

@endsection