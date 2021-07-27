<?php

namespace App\Http\Controllers;

use App\data_guru;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class tambahguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = data_guru::all();
        return view('/operator/dataguru',compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/operator/tambahguru');

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
        User::create([
            'name' => $request->input("nama"),
            'email' => $request->input("email"),
            'rule' => '2', 
            'password' => Hash::make($request->input("email")),
        ]);
         return redirect("/operator/dataguru")->with('sukses', 'Data Guru Berhasil Ditambahkan');
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
        $data = data_guru::where('id',$id)->get();
        return view('/operator/detailguru',['guru'=>$data]);
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

        data_guru::where('nuptk',$id)->update(['nama'=>$nama,'jabatan'=>$jabatan,'nuptk'=>$nuptk,'jenis_kelamin'=>$jenis_kelamin,'ttl'=>$ttl,
        'agama'=>$agama,'pendidikan'=>$pendidikan,'email'=>$email,'telephone'=>$telephone,'alamat'=>$alamat]);
        return redirect("/operator/dataguru");
        
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
