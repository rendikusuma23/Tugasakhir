@extends('admin/admin')

@section('css')

@endsection

@section('header')

@if(session('sukses'))
        {{-- <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div> --}}
        @section('js')
        <script type="text/javascript">
          $(document).ready(function(){
            var Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 5000
            });
              Toast.fire({
                icon: '{{session('icon')}}',
                title: '&nbsp; &nbsp; &nbsp;  {{session('sukses')}}'
              });
          });
        </script>
        @endsection
  @endif
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Lingkup Perkembangan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Lingkup Perkembangan </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <div class="col-2 sm-6 btn-sm float-sm-right">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-primary">
            Tambah Data
          </button>
      </div>
      </div>
<div class="card-body table table-responsive p-0" style="height: 470px;">
    <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example2">
      <thead>
        <tr >
          <th>NO</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
                $no=1;
            @endphp
            @foreach ($data as $g)
            <tr >
              <td>{{$no++}}</td>
            <td>{{$g->nama}}</td>
            <td >
                <button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal" data-target="#modal-danger{{$g->id}}">
                Hapus
              </button>
              <div class="modal fade" id="modal-danger{{$g->id}}">
                <div class="modal-dialog">
                  <div class="modal-content bg-danger">
                    <div class="modal-header">
                      <h4 class="modal-title">Hapus Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ route('lingkupperkembangan.destroy', $g->id) }}"method="POST">
                      @csrf
                      @method('DELETE')
                      
                    
                    <div class="modal-body">
                      <p>Apakah Anda yakin untuk menghapus data ini?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-outline-light">Hapus</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            @endforeach

    </tbody>
</table>
</div>
</div>

<div class="modal fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Lingkup Perkembangan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <dt class="col-sm-6">Nama Lingkup Perkembangan</dt>
        <form action="/operator/lingkupperkembangan" method="POST">
          @csrf
        <input type="text" name="nama" class="form-control"value="">      
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>    
@endsection

@section('js')

@endsection