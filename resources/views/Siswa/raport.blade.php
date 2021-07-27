@extends('admin/admin')

@section('css')
    
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Raport Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Siswa</a></li>
          <li class="breadcrumb-item active">Raport Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')
    
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 400px;">
        <br>
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap">
          <thead>
            <tr >
              <th>NO</th>
              <th>Lingkup Perkembangan</th>
              <th>Kompetisi dan Indikator</th>

            </tr>
          </thead>
          <tbody>
            @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr class="clickable-row" data-href="/siswa/raport/{{$p->id}}">
            <tr>
              <td>1</td>
              <td>Nilai Agama dan Moral</td>
              <td>{{$p->NAG}}</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Fisik Motorik</td>
              <td>{{$p->fisik_monotorik}}</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sosial Emosional</td>
              <td>{{$p->sosial_emosional}}</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Kognitif</td>
              <td>{{$p->kognitif}}</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Bahasa</td>
              <td>{{$p->bahasa}}</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Seni</td>
              <td>{{$p->seni}}</td>
            </tr>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
@endsection

@section('js')
    
@endsection