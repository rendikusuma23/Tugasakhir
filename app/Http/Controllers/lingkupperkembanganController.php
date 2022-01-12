<?php

namespace App\Http\Controllers;

use App\Lingkup_perkembangan;
use Illuminate\Http\Request;

class lingkupperkembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = lingkup_perkembangan::all();
        return view('operator/lingkupperkembangan/index', compact('data'));
        // echo "coba";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('operator/lingkupperkembangan/tambahdata', compact('data'));

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
        lingkup_perkembangan::create([
            'nama'=>$nama
        
        ]);
        return redirect("/operator/lingkupperkembangan")->with(['icon'=>'success','sukses'=>'Data Lingkup Perkembangan Berhasil Ditambahkan']);
// echo "coba";

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
        $data = lingkup_perkembangan::find($id);
        // echo $email;
        // echo $akun;
        $data->delete();
        return redirect(route('lingkupperkembangan.index'))->with(['icon'=>'error','sukses'=>'Data Lingkup Perkembangan Berhasil Dihapus']);

    }
}
