<?php

namespace App\Http\Controllers;

use App\data_siswa;
use App\nilai_perkembangan;
use Illuminate\Http\Request;
// use Perkembangan as GlobalPerkembangan;

class perkembanganController extends Controller
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
        return view('operator.perkembangan', compact('data'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $data = perkembangan::where('no_induk',$id)->get();
        // return view('/guru/perkembangandetail',['perkembangan'=>$data]);

        // $data = nilai_perkembangan::all();
        // return view('guru.perkembangandetail', compact('data'));
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
        $nama_lengkap= $request->input("nama_lengkap");
        $no_induk= $request->input("no_induk");
        $jenis_kelamin= $request->input("jenis_kelamin");
        $ttl= $request->input("ttl");
        $agama= $request->input("agama");
        $anak_ke= $request->input("anak_ke");
        $nama_ayah= $request->input("nama_ayah");
        $pekerjaan_ayah= $request->input("pekerjaan_ayah");
        $email= $request->input("email");
        $telephone= $request->input("telephone");
        $alamat_lengkap= $request->input("alamat_lengkap");

        data_siswa::where('no_induk',$id)->update(
            ['nama_lengkap'=>$nama_lengkap,
            'no_induk'=>$no_induk,
            'anak_ke'=>$anak_ke,
            'jenis_kelamin'=>$jenis_kelamin,
            'ttl'=>$ttl,
            'agama'=>$agama,
            'nama_ayah'=>$nama_ayah,
            'pekerjaan_ayah'=>$pekerjaan_ayah,
            'email'=>$email,
            'telephone'=>$telephone,
            'alamat_lengkap'=>$alamat_lengkap]);
        return redirect("/guru/perkembangan");
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
