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
      <p>Nama &nbsp:{{$siswa->nama_lengkap}}</p>
      <p>Kelas &nbsp &nbsp:{{$siswa->kelas}}</p>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 430px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="">
          <thead>
            <tr >
              <th>No</th>
              <th>Bulan</th>
              <th>Tanggal</th>
              <th>Nominal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Januari</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 1)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 1)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 1)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/1">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Februari</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 2)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 2)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 2)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/2">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Maret</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 3)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 3)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 3)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/3">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>April</td>
              <td>

                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 4)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 4)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 4)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/4">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mei</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 5)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 5)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 5)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/5">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Juni</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 6)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 6)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 6)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/6">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Juli</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 7)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 7)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 7)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/7">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Agustus</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 8)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 8)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 8)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/8">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>September</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 9)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 9)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 9)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/9">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Oktober</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 10)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 10)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 10)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/10">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>November</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 11)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 11)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 11)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/11">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Desember</td>
              <td>
                @php
                    $status ="Belum Dibayar";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 12)
                @php
                    $status =$item->tanggal;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="-";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 12)
                @php
                    $status =$item->spp;
                @endphp 
                @endif
                @endforeach
                {{$status}}
              </td>
              <td>
                @php
                    $status ="belum";
                @endphp
                @foreach ($data as $item)
                @if ($item->bulan == 12)
                @php
                    $status ="sudah";
                @endphp 
                @endif
                @endforeach
                @if ($status =="sudah")
                  <button type="button" class="disabled btn btn-warning btn-sm m-1 ">bayar </button>
                @else
                <a href="/operator/pembayaran/bayar/{{$id}}/12">
                  <button type="button" class="btn btn-warning btn-sm m-1 ">bayar </button>
                </a>
                @endif
              </td>
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