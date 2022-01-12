@extends('admin/admin')

@section('css')

@endsection

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kompetisi Indikator</h1>
        
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Kompetisi Indikator </li>
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
      <a href="/operator/kompetisiindikator/create">
        <button type="button" class="btn btn-block btn-success btn-sm ">Tambah Data </button>
      </a>
    </div>
    </div>
    <div class="card-body table table-responsive p-0" style="height: 430px;">
      <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example3">
        <thead>
          <tr >
            <th>NO</th>
            <th>Lingkup Perkembangan</th>
            <th>Kompetisi Indikator</th>
            <th>Bulan</th>
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
                <td>{{$g->lingkup_perkembangan}}</td>
                <td>{{$g->nama}}</td>
                <td>{{$g->bulan}}</td>
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
                      <form action="{{ route('kompetisiindikator.destroy', $g->id) }}"method="POST">
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
  </div>
{{-- </div>
<div class="card-body table" style="height: 350px;"> --}}
    {{-- <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="tabeldata">
      <thead>
        <tr >
          <th>NO</th>
          <th>Lingkup Perkembangan</th>
          <th>Kompetisi Indikator</th>
          <th>Bulan</th>
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
              <td>{{$g->lingkup_perkembangan}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->bulan}}</td>
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
                    <form action="{{ route('kompetisiindikator.destroy', $g->id) }}"method="POST">
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
</table> --}}
{{-- </div> --}}
    
@endsection

@section('js')

@endsection