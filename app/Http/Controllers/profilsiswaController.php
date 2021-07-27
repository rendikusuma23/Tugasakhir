<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_siswa;
use Auth;

class profilsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = data_siswa::where('email', Auth::user()->email)->get();
        return view('/siswa/profil',compact('data'));
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

        data_siswa::create([
            'nama_lengkap'=>$nama_lengkap,
            'no_induk'=>$no_induk,
            'jenis_kelamin'=>$jenis_kelamin,
            'ttl'=>$ttl,
            'agama'=>$agama,
            'anak_ke'=>$anak_ke,
            'nama_ayah'=>$nama_ayah,
            'pekerjaan_ayah'=>$pekerjaan_ayah,
            'email'=>$email,
            'telephone'=>$telephone,
            'alamat_lengkap'=>$alamat_lengkap]);
        return redirect("/siswa/profil");
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
        $data = data_siswa::where('id',$id)->get();
        return view('/siswa/profil',['siswa'=>$data]);
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
        // $nama_lengkap= $request->input("nama_lengkap");
        // $no_induk= $request->input("no_induk");
        // $jenis_kelamin= $request->input("jenis_kelamin");
        // $ttl= $request->input("ttl");
        $agama= $request->input("agama");
        // $anak_ke= $request->input("anak_ke");
        // $nama_ayah= $request->input("nama_ayah");
        $pekerjaan_ayah= $request->input("pekerjaan_ayah");
        $email= $request->input("email");
        $telephone= $request->input("telephone");
        $alamat_lengkap= $request->input("alamat_lengkap");

        data_siswa::where('id',$id)->update([
            // 'nama_lengkap'=>$nama_lengkap,
            // 'no_induk'=>$no_induk,
            // 'jenis_kelamin'=>$jenis_kelamin,
            // 'ttl'=>$ttl,
            'agama'=>$agama,
            // 'anak_ke'=>$anak_ke,
            // 'nama_ayah'=>$nama_ayah,
            'pekerjaan_ayah'=>$pekerjaan_ayah,
            'email'=>$email,
            'telephone'=>$telephone,
            'alamat_lengkap'=>$alamat_lengkap]);
        return redirect("/siswa/profil");
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
