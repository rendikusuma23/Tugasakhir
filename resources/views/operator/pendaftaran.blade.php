@extends('admin/admin')

@section('css')
<!-- SweetAlert2 -->

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Pendaftaran Siswa Baru</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Pendaftaran Siswa Baru</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

@if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pendaftaran Siswa Baru</h3><br>
      <!-- select --> 
      {{-- <div class="float-sm-left form-group">
          <select class="form-control">
          <option>Pilih Jenis</option>
          <option>Taman kanak-kanak</option>
          <option> Kelompok bermain</option>

          </select>
      </div> --}}

    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 400px;">
      <table class="table table-head-fixed text-nowrap" id="tabeldata">
        <thead>
          <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$p->NIK_siswa}}</td>
            <td>{{$p->nama_lengkap}}</td>
            @if ($p->status==='Diterima')
            <td>
              
              <span class="badge bg-success">Diterima</span></td>
            @else
            <td><span class="badge bg-success">Belum Verifikasi</span></td>

            @endif
            <td>
              <a href="/operator/pendaftaran/{{$p->id_jenis}}">
                <button type="button" class="btn btn-success btn-sm ">Konfirmasi </button>
              </a>
              
              <a href="">
                <button type="button" class="btn btn-danger btn-sm m-1 ">Hapus </button>
              </a>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection

@section('js')
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
</script>

@endsection