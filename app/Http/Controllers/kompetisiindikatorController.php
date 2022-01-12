<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kompetisi_indikator;
use App\Lingkup_perkembangan;
use Illuminate\Support\Facades\Hash;


class kompetisiindikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Kompetisi_indikator::join(
            'lingkup_perkembangans',
            'kompetisi_indikators.lingkup_perkembangan','=','lingkup_perkembangans.id')
        ->get([
            'kompetisi_indikators.bulan',
            'kompetisi_indikators.id',
            'lingkup_perkembangans.nama as lingkup_perkembangan','kompetisi_indikators.nama' ]);
        return view('operator/kompetisiindikator/index', compact('data'));
// echo json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $lingkup = Lingkup_perkembangan ::all();
        return view ('operator/kompetisiindikator/tambahdata',compact('lingkup')); 
        // $nama= $request->input("nama");
        // $lingkup_perkembangan= $request->input("lingkup_perkembangan");
        // $bulan= $request->input("bulan");
        // Kompetisi_indikator::create([
        //     'nama'=>$nama,
        //     'lingkup_perkembangan'=>$lingkup_perkembangan,
        //     'bulan'=>$bulan,   
        // ]);
        // return view('operator/kompetisiindikator/tambahdata');

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
        $lingkup_perkembangan= $request->input("lingkup_perkembangan");
        $bulan= $request->input("bulan");

        Kompetisi_indikator::create([
            'nama'=>$nama,
            'lingkup_perkembangan'=>$lingkup_perkembangan,
            'bulan'=>$bulan,   
        ]);
        return redirect("/operator/kompetisiindikator")->with(['icon'=>'success','sukses'=>'Data Kompetisi Indikator Berhasil Ditambahkan']);
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
        $data = Kompetisi_indikator::find($id);
        // echo $email;
        // echo $akun;
        $data->delete();
        return redirect(route('kompetisiindikator.index'))->with(['icon'=>'error','sukses'=>'Data Kompetisi Indikator Berhasil Dihapus']);

    }
}
