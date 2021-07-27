@extends('admin/admin')

@section('css')
    
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Pembayaran SPP</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/admin">Operator</a></li>
          <li class="breadcrumb-item active">Pembayaran</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Pembayaran SPP</h3><br> <br>


      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 350px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="">
          <thead>
            <tr >
              <th>No</th>
              <th>Bulan</th>
              <th>Tanggal</th>
              <th>Nominal</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Januari</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Februari</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Maret</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td>April</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mei</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Juni</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Juli</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Agustus</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>9</td>
              <td>September</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>10</td>
              <td>Oktober</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>11</td>
              <td>November</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>12</td>
              <td>Desember</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

            {{-- @php
              $no=1;
          @endphp
          @foreach ($data as $p)
          <tr class="clickable-row" data-href="/operator/pembayaran/{{$p->id}}">
            <td>{{$no++}}</td>
            <td>{{$p->nama_lengkap}}</td>
            <td>{{$p->no_induk}}</td>
            <td>{{$p->kelas}}</td>
          </tr>
          @endforeach --}}
          </tbody>
        </table>
      </div>

      <!-- /.card-body -->
    </div>
    
    <!-- /.card -->
  </div>
</div>
<br>


    
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