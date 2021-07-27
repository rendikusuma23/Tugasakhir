@extends('admin/admin')

@section('css')

@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Akreditasi Sekolah</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Guru</a></li>
          <li class="breadcrumb-item active">Akreditasi</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Dokumen Lampiran Akreditasi</h3><br> <br> 
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>NO</th>
              <th>Standar</th>
              <th>Nama Dokumen</th>
              <th>status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Standar tingkat pencapaian</td>
              <td>
                <div class="row">
                    <div class="custom-file col-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
              </td>
              <td><span class="badge bg-success">sudah terisi</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Standar isi</td>
              <td>
                <div class="row">
                    <div class="custom-file col-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
              </td>
              <td><span class="badge bg-success">sudah terisi</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Standar proses</td>
              <td>
                <div class="row">
                    <div class="custom-file col-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
              </td>
              <td><span class="badge bg-danger">Belum terisi</span></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Standar pendidik dan tenaga pendidikan</td>
              <td>
                <div class="row">
                    <div class="custom-file col-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
              </td>
              <td><span class="badge bg-success">sudah terisi</span></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Standar sarana dan pasarana</td>
              <td>
                <div class="row">
                    <div class="custom-file col-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
              </td>
              <td><span class="badge bg-success">sudah terisi</span></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Standar pengolahan</td>
              <td>
                  <div class="row">
                    <div class="custom-file col-10">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
              </td>
              <td><span class="badge bg-success">sudah terisi</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>


@endsection

@section('js')

@endsection 