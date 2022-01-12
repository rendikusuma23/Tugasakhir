<?php

namespace App\Http\Controllers;

use App\data_guru;
use Auth;
use Illuminate\Http\Request;

class profilguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = data_guru::where('nuptk',$session->nuptk->get();
        // // $data = data_guru::all();
        // return view('/guru/profil',compact('data'));
        // echo Auth::user()->rule;
        // $data = data_guru:: user()->rule
        $data = data_guru::where('email', Auth::user()->email)->get();
        return view('/guru/profil',compact('data'));
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
        $nama= $request->input("nama");
        $jabatan= $request->input("jabatan");
        $nuptk= $request->input("nuptk");
        $jenis_kelamin= $request->input("jenis_kelamin");
        $ttl= $request->input("ttl");
        $agama= $request->input("agama");
        $pendidikan= $request->input("pendidikan");
        $email= $request->input("email");
        $telephone= $request->input("telephone");
        $alamat= $request->input("alamat");

        data_guru::create(['nama'=>$nama,'jabatan'=>$jabatan,'nuptk'=>$nuptk,'jenis_kelamin'=>$jenis_kelamin,'ttl'=>$ttl,
        'agama'=>$agama,'pendidikan'=>$pendidikan,'email'=>$email,'telephone'=>$telephone,'alamat'=>$alamat]);
        return redirect("/guru/profil");
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
        $data = data_guru::where('nuptk',$id)->get();
        return view('/guru/profil',['guru'=>$data]);
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
        
        $agama= $request->input("agama");
        $pendidikan= $request->input("pendidikan");
        $email= $request->input("email");
        $telephone= $request->input("telephone");
        $alamat= $request->input("alamat");

        data_guru::where('id',$id)->update([
            'agama'=>$agama,
            'pendidikan'=>$pendidikan,
            'email'=>$email,
            'telephone'=>$telephone,
            'alamat'=>$alamat]);
        return redirect("/guru/profil");
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
