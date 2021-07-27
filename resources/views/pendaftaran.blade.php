<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KB & TK Pembina Plus Dewi Masyithoh Kalikangkung | Dashboard</title>

  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="sidebar-none layout-fixed sidebar-collapse ">

      
<div class="wrapper">
    <div class="content-header" style='background-color:#27b183; color:#ffff' >
        <div class="container-fluid">
        <center>
            <h1 class="m-0">KB & TK Pembina Plus Dewi Masyithoh Kalikangkung</h1>
        </center>
        <!-- /.row -->
        </div>
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-green "style='background-color:#27b183'>
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Pendaftaran Sekolah</a>
        </li>
        </ul>
    
        <!-- SEARCH FORM -->
        
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        
        </ul>
    </nav>
    <!-- /.navbar -->
  
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="card">
          <form action="pendaftaran" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="card-body ml-5">
              <dl class="row ">
                <dl class="input-group mb-3">
                  <dt class="col-sm-4">Pilih Jenis Tingkatan</dt>
                  <dd class="col-sm-5">
                    <select name="jenis_tingkatan" class="form-control">
                      <option>Kelompok Bermain</option>
                      <option>Taman Kanak-Kanak</option>  
                    </select>
                  </dd>
                </dl>
              </dl>
              <center><h3 >Identitas</h3><br></center>
              <dl class="row ">
                <dl class="input-group mb-3">
                  
                  <dt class="col-sm-4">Nama Lengkap</dt>
                  <dd class="col-sm-5"><input type="text" name="nama_lengkap" class="form-control"value=" "></dd>
                  <dt class="col-sm-4">NIK</dt>
                  <dd class="col-sm-5"><input type="number" name="NIK_siswa" class="form-control" value=""></dd>
                  <dt class="col-sm-4">Jenis Kelamin</dt>
                  <dd class="col-sm-5">
                    <select name="jenis_kelamin" class="form-control">
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>  
                    </select>
                  </dd>
                  <dt class="col-sm-4">Tempat dan Tanggal Lahir</dt>
                  <dd class="col-sm-5"><input type="text" name="ttl" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Agama</dt>
                  <dd class="col-sm-5">
                    <select name="agama" class="form-control">
                        <option>Islam</option>
                        <option>Hindu</option>
                        <option>Kristen</option>  
                        <option>Katholik</option>  
                        <option>konghuchu</option>  
            
                        </select>
                            </dd>
                  {{-- <dd class="col-sm-5"><input type="text" name="agama" class="form-control" value=" "></dd> --}}
                  <dt class="col-sm-4">Anak ke</dt>
                  <dd class="col-sm-5"><input type="text" name="anak_ke" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Kewarganegaraan</dt>
                  <dd class="col-sm-5"><input type="text " name="kewarganegaraan" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Usia</dt>
                  <dd class="col-sm-5"><input type="text " name="usia" class="form-control" value=" "></dd>        
                  <dt class="col-sm-4">Email</dt>
                  <dd class="col-sm-5"><input type="text " name="email" class="form-control" value=" "></dd>        
                  <dt class="col-sm-4">Telephone</dt>
                  <dd class="col-sm-5"><input type="number" name="telephone" class="form-control" value=""></dd>
                  <dt class="col-sm-4">Alamat Lengkap</dt>
                  <dd class="col-sm-5">
                    <textarea name="alamat_lengkap" id="" cols="30" rows="5" class="form-control" placeholder="jalan, desa/kelurahan, kecamatan, kabupaten/kota"></textarea>
                    {{-- <input name="alamat_lengkap" type="textarea" class="form-control" value="" placeholder="Jalan">
                    <input name="alamat_lengkap" type="text " class="form-control" value="" placeholder="Desa/Kelurahan" >
                    <input name="alamat_lengkap" type="text " class="form-control" value="" placeholder="Kecamatan">
                    <input name="alamat_lengkap" type="text " class="form-control" value="" placeholder="Kabupaten/Kota"> --}}
                  </dd>
                </dl>
              </dl>
              <center><h3 >Orang Tua</h3> </center><br>
              <dl class="row ">
                <dl class="input-group mb-3">
                  <dt class="col-sm-4">Nama Ayah</dt>
                  <dd class="col-sm-5"><input name="nama_ayah" type="text" class="form-control"value=" "></dd>
                  <dt class="col-sm-4">NIK</dt>
                  <dd class="col-sm-5"><input name="NIK_ayah" type="number" class="form-control" value=""></dd>
                  <dt class="col-sm-4">Tahun Lahir</dt>
                  <dd class="col-sm-5"><input name="tahunlahir_ayah" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Pendidikan</dt>
                  <dd class="col-sm-5"><input name="pendidikan_ayah" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Pekerjaan</dt>
                  <dd class="col-sm-5"><input name="pekerjaan_ayah" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Nama Ibu</dt>
                  <dd class="col-sm-5"><input name="nama_ibu" type="text" class="form-control"value=" "></dd>
                  <dt class="col-sm-4">NIK</dt>
                  <dd class="col-sm-5"><input name="NIK_ibu" type="number" class="form-control" value=""></dd>
                  <dt class="col-sm-4">Tahun Lahir</dt>
                  <dd class="col-sm-5"><input name="tahunlahir_ibu" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Pendidikan</dt>
                  <dd class="col-sm-5"><input name="pendidikan_ibu" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Pekerjaan</dt>
                  <dd class="col-sm-5"><input name="pekerjaan_ibu" type="text" class="form-control" value=" "></dd>
                </dl>
              </dl>

              <center><h3 >Periodik</h3> </center><br>
              <dl class="row ">
                <dl class="input-group mb-3">
                  <dt class="col-sm-4">Tinggi Badan</dt>
                  <dd class="col-sm-5"><input name="tinggi_badan" type="text" class="form-control" value=""></dd>
                  <dt class="col-sm-4">Berat Badan</dt>
                  <dd class="col-sm-5"><input name="berat_badan" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Jarak Tempuh</dt>
                  <dd class="col-sm-5"><input name="jarak_tempuh" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Jumlah Saudara</dt>
                  <dd class="col-sm-5"><input name="jumlah_saudara" type="text" class="form-control" value=" "></dd>
                  <br>
                </dl>
              </dl>

              <center><h3 >Register</h3> </center><br>
              <dl class="row ">
                <dl class="input-group mb-3">
                  <dt class="col-sm-4">Jenis pendaftaran</dt>
                  <dd class="col-sm-5">
                    <select name="jenis_pendaftaran" class="form-control">
                      <option>Siswa Baru</option>
                      <option>Pindahan</option>
                      <option>Sekolah Lagi</option>    
                    </select>
                  </dd>
                  <dt class="col-sm-4">No Induk Siswa</dt>
                  <dd class="col-sm-5"><input name="no_induk" type="text" class="form-control" value=" "></dd>
                  <dt class="col-sm-4">Masuk Rombel</dt>
                  <dd class="col-sm-5">
                  <select name="masuk_rombel" class="form-control">
                    <option>(A) 4-5 Tahun</option>
                    <option>(B) 5-6 Tahun</option>
                    <option>(C) 3 Tahun</option>
                  </select>
                  </dd>
                  <br>
                  <dt class="col-sm-4"></dt>
                  <dd class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success swalDefaultSuccess">Simpan</button>
                  </dd>
                </dl>
              </dl>
            </form>
            </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0-rc
      </div>
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">KB & TK Pembina Plus Dewi Masyithoh Kalikangkung</a>.</strong> All rights reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
 $(function () {
  bsCustomFileInput.init();
}); 
</script>
</body>
</html>
