@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Guru</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Data Guru</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection


@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Guru</h3><br>
        <div class="col-2  p-1 float-sm-right">
          <a href="/operator/dataguru/create">
            <button type="button" class="btn btn-block btn-success btn-sm ">Tambah Data </button>
          </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 450px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="tabeldata">
          <thead>
            <tr >
              <th>NO</th>
              <th>Nama</th>
              <th>NUPTK</th>
              <th>Jabatan</th>
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
            <td>{{$g->nuptk}}</td>
            <td>{{$g->jabatan}}</td>
            <td >
              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data_guru.destroy', $g->id) }}"method="POST">
                <a href="{{ url('/operator/dataguru', $g->id) }}" class="btn btn-sm btn-success waves-effect m-r-20">Detail</a>
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal" data-target="#modal-danger{{$g->id}}">
                Hapus
              </button>
              </form>
              <div class="modal fade" id="modal-danger{{$g->id}}">
                <div class="modal-dialog">
                  <div class="modal-content bg-danger">
                    <div class="modal-header">
                      <h4 class="modal-title">Hapus Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{ route('data_guru.destroy', $g->id) }}"method="POST">
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
            </tr>
                
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>


@endsection

@section('js')
<script>
    jQuery(document).ready(function($){
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>


@endsection