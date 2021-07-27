<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendaftaran;
use Storage;  

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pendaftaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pendaftaran.create');


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
        $nama_lengkap= $request->input("nama_lengkap");
        $NIK_siswa= $request->input("NIK_siswa");
        $jenis_kelamin= $request->input("jenis_kelamin");
        $ttl= $request->input("ttl");
        $agama= $request->input("agama");
        $anak_ke= $request->input("anak_ke");
        $kewarganegaraan= $request->input("kewarganegaraan");
        $usia= $request->input("usia");
        $email= $request->input("email");
        $telephone= $request->input("telephone");
        $alamat_lengkap= $request->input("alamat_lengkap");
        $nama_ayah= $request->input("nama_ayah");
        $NIK_ayah= $request->input("NIK_ayah");
        $tahunlahir_ayah= $request->input("tahunlahir_ayah");
        $pendidikan_ayah= $request->input("pendidikan_ayah");
        $pekerjaan_ayah= $request->input("pekerjaan_ayah");
        $nama_ibu= $request->input("nama_ibu");
        $NIK_ibu= $request->input("NIK_ibu");
        $tahunlahir_ibu= $request->input("tahunlahir_ibu");
        $pendidikan_ibu= $request->input("pendidikan_ibu");
        $pekerjaan_ibu= $request->input("pekerjaan_ibu");
        $tinggi_badan= $request->input("tinggi_badan");
        $berat_badan= $request->input("berat_badan");
        $jarak_tempuh= $request->input("jarak_tempuh");
        $jumlah_saudara= $request->input("jumlah_saudara");
        $jenis_pendaftaran= $request->input("jenis_pendaftaran");
        $no_induk= $request->input("no_induk");
        $masuk_rombel= $request->input("masuk_rombel");
        // $ktp_orangtua= $foto;
        $status = 'Belum Verifikasi';

        pendaftaran::create([
            'nama_lengkap'=>$nama_lengkap,
            'NIK_siswa'=>$NIK_siswa,
            'jenis_kelamin'=>$jenis_kelamin,
            'ttl'=>$ttl,
            'agama'=>$agama,
            'anak_ke'=>$anak_ke,
            'kewarganegaraan'=>$kewarganegaraan,
            'usia'=>$usia,
            'email'=>$email,
            'telephone'=>$telephone,
            'alamat_lengkap'=>$alamat_lengkap,
            'nama_ayah'=>$nama_ayah,
            'NIK_ayah'=>$NIK_ayah,
            'tahunlahir_ayah'=>$tahunlahir_ayah,
            'pendidikan_ayah'=>$pendidikan_ayah,
            'pekerjaan_ayah'=>$pekerjaan_ayah,
            'nama_ibu'=>$nama_ibu,
            'NIK_ibu'=>$NIK_ibu,
            'tahunlahir_ibu'=>$tahunlahir_ibu,
            'pendidikan_ibu'=>$pendidikan_ibu,
            'pekerjaan_ibu'=>$pekerjaan_ibu,
            'tinggi_badan'=>$tinggi_badan,
            'berat_badan'=>$berat_badan,
            'jarak_tempuh'=>$jarak_tempuh,
            'jumlah_saudara'=>$jumlah_saudara,
            'status'=>$status,
            'jenis_pendaftaran'=>$jenis_pendaftaran,
            'no_induk'=>$no_induk,
            'masuk_rombel'=>$masuk_rombel]);
        return redirect("/pendaftaran")->with('sukses', 'data pendaftaran berhasil di tambahkan ');
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
        // $data = pendaftaran::where('NIK_siswa',$id)->get();
        // return view('/operator/pendaftaran',['pendaftaran'=>$data]);
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
