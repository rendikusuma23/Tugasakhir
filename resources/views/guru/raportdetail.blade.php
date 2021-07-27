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
          <li class="breadcrumb-item"><a href="/admin">Guru</a></li>
          <li class="breadcrumb-item active">Raport Siswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')
    
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 500px;">
        {{-- @foreach ($data as $g)
        <p value="{{$g->nama_lengkap}}">Nama   : </p>
        @endforeach --}}
        <form action="/guru/inputraport/{{$id}}" method="POST">
          @csrf
        <div class="float-sm-left form-group">
          <select class="form-control" name="tahun">
          <option>Tahun</option>
          <option value="2020/2021">2020/2021</option>
          <option value="2021/2022">2021/2022</option>
          <option value="2022/2023">2022/2023</option>

          </select>
        </div>
        <div class="float-sm-left form-group">
          <select class="form-control" name="semester">
            <option>Semester</option>
            <option value="Ganjil ">Ganjil</option>
            <option value="Genap">Genap</option>
            </select>
        </div>
        <table class="table table-head-fixed table-hover">
          <thead>
            <tr >
              <th>NO</th>
              <th>Lingkup Perkembangan</th>
              <th>Kompetisi dan Indikator</th>
            </tr>
          </thead>
          <tbody>
            
              <tr>
                <td>1</td>
                <td>Nilai Agama dan Moral</td>
                <td>
                  <input type="text" name="NAG" class="form-control">
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Fisik Motorik</td>
                <td>
                  <input type="text" name="fisik_monotorik" class="form-control">
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Sosial Emosional</td>
                <td>
                  <input type="text" name="sosial_emosional" class="form-control">
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Kognitif</td>
                <td>
                  <input type="text" name="kognitif" class="form-control">
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Bahasa</td>
                <td>
                  <input type="text" name="bahasa" class="form-control">
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Seni</td>
                <td>
                  <input type="text" name="seni" class="form-control">
                </td> 
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><div class="col-12 p-3">
                  <div class="float-sm-left">
                    <button type="submit" class="btn btn-block btn-success">Simpan</button>
                  </div>
                </div></td>
              </tr>
            </form>
          </tbody>
        </table>
      </div>
      
@endsection

@section('js')
    
@endsection