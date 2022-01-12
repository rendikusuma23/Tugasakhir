@extends('admin/admin')

@section('css')
    
@endsection
@section('tittle')
Raport | {{ Auth::user()->name }}
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Raport Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Guru</a></li>
          <li class="breadcrumb-item active">Raport Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')
<form action="/guru/filter/lihatraport/{{ $id }}" method="post">
  @csrf      
  {{-- <div class="float-sm-left form-group" >
    <select class="form-control"name="tahun">
    <option value="">Tahun</option>
    <option value="2020/2021">2020/2021</option>
    <option value="2021/2022">2021/2022</option>
    <option value="2022/2023">2022/2023</option>
    <option value="2023/2024">2022/2023</option>
    <option value="2024/2025">2022/2023</option>
    <option value="2025/2026">2022/2023</option>
    </select>
  </div> --}}
  <div class="float-sm-left form-group">
    <select class="form-control" name="semester">
      <option value="">Semester</option>
      <option value="Ganjil ">Ganjil</option>
      <option value="Genap">Genap</option>
      </select>
  </div>
  <button type="submit" class="btn btn-primary btn-sm m-1 ">Tampil </button>
</form>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 450px;">
        <br>
        <p>Nama &nbsp:{{$siswa->nama_lengkap}}</p>
        <p>Kelas &nbsp &nbsp:{{$siswa->kelas}}</p>

        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example2">
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
          @endforeach
          </tbody>
        </table>
      </div>
@endsection

@section('js')
    
@endsection