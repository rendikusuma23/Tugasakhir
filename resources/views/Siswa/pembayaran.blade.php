@extends('admin/admin')

@section('css')
    
@endsection

@section('tittle')
Pembayaran SPP | {{ Auth::user()->name }}
@endsection

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Catatan Pembayaran SPP</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Siswa</a></li>
          <li class="breadcrumb-item active">Pembayaran SPP</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
    
@endsection

@section('content')
    
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap table-hover text-nowrap" id="example2">
          <thead>
            <tr >
              <th>NO</th>
              <th>Bulan</th>
              <th>Tanggal Pembayaran</th>
              <th>Nominal</th>
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
            </tr>
          </tbody>
        </table>
      </div>
@endsection

@section('js')
    
@endsection