<body class="hold-transition sidebar-mini">
  <div class="wrapper">
<aside class="main-sidebar sidebar-light-primary elevation-4"style="background-color: #27b183">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link"style="background-color: #fff">
    <center>
      {{-- <img src="{{asset('lte/dist/img/tk.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <img src="{{asset('lte/dist/img/tk.png')}}"style='width:100px'><br>
      <span class="brand-text font-weight-dark"style='color:#27b183'>KB & TK Dewi Masyithoh</span>
    </center>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ Auth::user()->name }}" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
        <a href="#"style="color: #fff" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
        @if (Auth::user()->rule ==='1')
        <li class="nav-item">
          <a href="/operator/pendaftaran" class="nav-link"style="color: #ffff">
            <i class="nav-icon fas fa-user-plus  "></i>
              <p>
                Pendaftaran Siswa Baru
                <span class="badge badge-info right"></span>
              </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link"style="color: #ffff">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/operator/perkembangan" class="nav-link"style="color: #ffff">
                <i class="far fa-circle nav-icon"></i>
                <p>Perkembangan Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/operator/raport" class="nav-link"style="color: #ffff">
                <i class="far fa-circle nav-icon"></i>
                <p>Raport</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"style="color: #ffff">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/operator/dataguru" class="nav-link"style="color: #ffff">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Guru</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/operator/datasiswa" class="nav-link"style="color: #ffff">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Siswa</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="/operator/datakelas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Kelas</p>
              </a>
            </li> --}}
          </ul>
        </li>

        <li class="nav-item">
          <a href="/operator/akun" class="nav-link"style="color: #ffff">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Akun
            </p>
          </a>
        </li>

        {{-- <li class="nav-item">
          <a href="/operator/akreditasi" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Akreditasi
            </p>
          </a>
        </li> --}}

        <li class="nav-item">
          <a href="/operator/pembayaran" class="nav-link"style="color: #ffff">
            <i class="nav-icon far fa-credit-card"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>

        @elseif (Auth::user()->rule == '2')
        <li style="color: #27b183" class="nav-header">Guru</li>

        <li class="nav-item">
          <a href="/guru/profil" class="nav-link"style="color: #ffff">
            <i class="nav-icon far fa-user"></i>
            <p>
              Profil
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link"style="color: #ffff">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/guru/perkembangan" class="nav-link"style="color: #ffff">
                <i class="fas fa-book nav-icon"></i>
                <p>Perkembangan Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/guru/raport" class="nav-link"style="color: #ffff">
                <i class="fas fa-book nav-icon"></i>
                <p>Raport</p>
              </a>
            </li>
          </ul>
        </li>

        {{-- <li class="nav-item">
          <a href="/guru/akreditasi" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Akreditasi
            </p>
          </a>
        </li> --}}

        @elseif (Auth::user()->rule == '3')
        {{-- <li style="color: #ffff"class="nav-header">Siswa</li> --}}
        <li class="nav-item">
          <a href="/siswa/profil" class="nav-link"style="color: #ffff">
            <i class="nav-icon far fa-user"></i>
            <p>
              Profil
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link"style="color: #ffff">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/siswa/perkembangan" class="nav-link"style="color: #ffff">
                <i class="fas fa-book nav-icon"></i>
                <p>Perkembangan Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/siswa/raport" class="nav-link"style="color: #ffff">
                <i class="fas fa-book nav-icon"></i>
                <p>Raport</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/siswa/pembayaran" class="nav-link"style="color: #ffff">
            <i class="nav-icon far fa-credit-card"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        @endif

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- jQuery -->
{{-- <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../dist/js/demo.js')}}"></script> --}}

  </div>
  <!-- /.sidebar -->
</aside>

</div>
</body>
