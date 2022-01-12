<?php

namespace App\Http\Controllers;

use App\data_siswa;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class datasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tahun = data_siswa::groupby('tahun_masuk')->get('tahun_masuk');
        $data = data_siswa::all();
        return view('operator.datasiswa', compact('data','tahun'));
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
        $data = data_siswa::where('id',$id)->get();
        return view('/operator/detailsiswa',['data_siswa'=>$data]);
    }
    public function filtersiswa(Request $request)
    {
        //
        $tahun = data_siswa::groupby('tahun_masuk')->get('tahun_masuk');
        // echo $request->kelas;
        if ($request->kelas == "Semua") {
            if ($request->tahun == "Semua") {
                $data = data_siswa::all();
                return view('operator.datasiswa', compact('data','tahun'));
            } else {
                $where=['tahun_masuk'=>$request->tahun];
            }
        } else {
            if ($request->tahun == "Semua") {
                $where=['kelas'=>$request->kelas];
            } else {
                $where=['kelas'=>$request->kelas,'tahun_masuk'=>$request->tahun];
            }
        }
        $data = data_siswa::where($where)->get();
        return view('operator.datasiswa', compact('data','tahun'));
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
        $kelas= $request->input("kelas");
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

        data_siswa::where('id',$id)->update(
            ['nama_lengkap'=>$nama_lengkap,
            'kelas'=>$kelas,
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
        return redirect("/operator/datasiswa");
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
        $data_siswa = data_siswa::find($id);
        $email = data_siswa::find($id)->email;
        // echo $email;
        $akun = User::where('email',$email)->first();
        // echo $akun;
        $data_siswa->delete();
        $akun->delete();
        return redirect(route('data_siswa.index'))->with(['icon'=>'success','sukses'=>'Data siswa Berhasil Dihapus']);
    }
}
