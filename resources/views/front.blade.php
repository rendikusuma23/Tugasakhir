<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelompok Bermain & Taman Kanak-kanak Pembina Plus Dewi Masyithoh Kalikangkung | Dashboard</title>

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
<body class="sidebar-none layout-fixed sidebar-collapse " >
    
<div class="wrapper">
    <div class="content-header" style='background-color:#27b183; color:#ffff'>
        <div class="container-fluid">
        <center>
            <h1 class="m-0">Kelompok Bermain & Taman Kanak-kanak Pembina Plus Dewi Masyithoh Kalikangkung</h1>
        </center>
        <!-- /.row -->
        </div>
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark"style="background-color: #27b183">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/pendaftaran" class="nav-link">Pendaftaran Siswa Baru</a>
        </li>
        </ul>
    
        <!-- SEARCH FORM -->
        
    
        <!-- Right navbar links -->
        
        <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/login" class="nav-link">Login</a>
        </li>
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        
        </ul>
    </nav>
    <!-- /.navbar -->
  
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
        <center>
          <h1>Profil Sekolah</h1>
        </center>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
          <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('lte/dist/img/tk')}}.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Taman kanak-kanak pembina plus dewi Masyithoh kalikangkung</h3>

                <ul class="list-group list-group-unbordered mb-3">

                  <strong><i class="fas fa-user mr-1"></i> Kepala Sekolah</strong>
                  <p class="text-muted">Fifyanti, S.Pd.AUD</p>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>
                  <p class="text-muted">Jl. Raya Selatan Kalikangkung, No.66 RT 01/RW 02 Kec. Pangkah, Kab. Tegal, Jawa Tengah 52471</p>
                  
                  <strong><i class="far fa-file-alt mr-1"></i> NPSN</strong>
                  <p class="text-muted">20362010</p>
                  <strong><i class="fas fa-lg fa-phone mr-1"></i> Telephone</strong>
                  <p class="text-muted">(0283)445083</p>
                  <strong><i class="fa fa-envelope mr-1"></i> Email</strong>
                  <p class="text-muted">tkpembinakalikangkung@yahoo.com
                  </p>


                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            {{-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Visi</strong>
                <p class="text-muted">
                  Mewujudkan generasi yang unggul, berprestasi, religius dan islami.
                </p>

                <hr>
                <strong><i class="fas fa-book mr-1"></i> Misi</strong>
                <p class="text-muted">
                  1.
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Tentang Sekolah</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <h3>
                      </h3>
                      <div class="row">
                      <div class="col-sm-6">
                        <img class="img-fluid" src="{{asset('lte/dist/img/sekolah')}}.jpg" alt="Photo">
                      </div>
                      <div class="col-sm-6">
                        <img class="img-fluid" src="{{asset('lte/dist/img/siswa2')}}.jpg" alt="Photo">
                      </div>
                    </div>
                      <br>
                      <div class="user-block">
                        <h2>
                          VISI
                        </h2>
                        {{-- <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span> --}}
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Mewujudkan generasi yang unggul, berprestasi, religius dan islami.
                      </p>

                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <h2>
                          MISI
                        </h2>
                        {{-- <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span> --}}
                      </div>
                      <!-- /.user-block -->
                      <p>
                        1. Memfasilitasi kebutuhan anak didik dengan tepat
                        <br>
                        2. Berpartisipasi dalam kegiatan diluar Sekolah
                        <br>
                        3. Mencetak generasi yang beriman dan bertakwa <br>
                        4. Menyediakan sarana dan pasarana yang memadahi <br>
                        5. Membudayakan perilaku positif dalam kehidupan sehari-hari <br>
                        6. Mewujudkan generasi yang religius dan islami <br>
                      </p>

                    </div>
                    <div class="post clearfix">
                      <div class="user-block">
                        <h2>
                          Tujuan Sekolah
                        </h2>
                        {{-- <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span> --}}
                      </div>
                      <!-- /.user-block -->
                      <p>
                        1. Mewujudkan anak yang sehat , jujur, senang belajar, dan mendiri<br>
                        2. Mewujudkan anak yang mampu merawat dab peduli terhadap diri sendiri, teman, dan lingkungan sekitarnya <br>
                        3. Menjadikan anak yang mampu berfikir, berkomunikasi, bertindak produktif dan kreatif melalui bahasa, musik, karya, dan gerakan sederhana <br>
                        4. Menjadikan anak beragama sejak dini <br>
                        5. Menciptakan iklim belajar yang kondusif bagi penyelenggaraan pendidikan, perawatan, pengasuhan, dan perlindungan anak <br>
                      </p>

                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    {{-- <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('lte/dist/img/gerbang')}}.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="{{asset('lte/dist/img/siswa')}}.jpg" alt="Photo">
                              <img class="img-fluid" src="{{asset('lte/dist/img/sekolah')}}.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div> --}}
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
      {{-- <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              
              <!-- /.card -->
  
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section> --}}
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0-rc
      </div>
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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

</body>
</html>
