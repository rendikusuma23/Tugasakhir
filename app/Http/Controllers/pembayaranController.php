<?php

namespace App\Http\Controllers;

use App\data_siswa;
use Illuminate\Http\Request;
use App\pembayaran;
use Carbon\Carbon;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = data_siswa::all();
        return view('operator.pembayaran', compact('data'));
    }

    public function filtersiswa(Request $request)
    {
        //
        // echo $request->kelas;
        if ($request->kelas == "Semua") {
            $data = data_siswa::all();
        } else {
            $data = data_siswa::where('kelas',$request->kelas)->get();
        }
        
        return view('operator.pembayaran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function bayar($id, $bulan)
    {

        $tanggal = Carbon::now()->toDateString();
        pembayaran::create([
            'bulan'=>$bulan,
            'tanggal'=>$tanggal,
            'keterangan'=>"Lunas",
            'siswa'=>$id,
            'spp'=>"80.000"
        ]);
         return redirect("/operator/pembayaran/$id");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $bulan= $request->input("bulan");
        $tanggal= $request->input("tanggal");
        $keterangan= $request->input("keterangan");
        $siswa= $request->input("siswa");

        pembayaran::create([
            'bulan'=>$bulan,
            'tanggal'=>$tanggal,
            'keterangan'=>$keterangan,
            'siswa'=>$siswa
        ]);
         return redirect("/operator/bayardetail");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $siswa = data_siswa::find($id);

        $data = pembayaran::where('siswa',$id)->get();
        return view('operator.bayar', compact('id','data','siswa'));
        // echo $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
