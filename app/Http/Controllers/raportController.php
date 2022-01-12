<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\raport;
use App\data_siswa;

class raportController extends Controller
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
        return view('guru.raport', compact('data'));


    }

    public function filterlihatraport(Request $request,$id)
    {
        //
        $siswa = data_siswa::where('id',$id)->first();
        // echo $request->kelas;
        // if ($request->tahun == "") {
            if ($request->semester == "") {
                $data = raport::all();
            } else {
                $data = raport::where(['siswa'=>$id,'semester'=>$request->semester])->get();
            }
        // } else {
        //     if ($request->semester == "") {
        //         $data = raport::where(['tahun'=>$request->tahun])->get();
        //     } else {
        //         $data = raport::where(['tahun'=>$request->tahun, 'semester'=>$request->semester])->get();
        //     }
        // }
        
        return view('guru.lihatraport', compact('id','data','siswa'));
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
        
        return view('guru.raport', compact('data'));
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

    public function lihatraport($id)
    {
        $siswa = data_siswa::find($id);

        // $data = raport::where('id',$id)->get();
        // return view('/guru/raportdetail',['raport'=>$data]);

        // where('id_jenis',$id)->get();
        $data = raport::where('id',$id)->get();

        return view('guru.lihatraport', compact('id','siswa','data'));      

    }
     
    public function show($id)
    {
        //
        
        $siswa = data_siswa::find($id);

        // $data = raport::where('id',$id)->get();
        // return view('/guru/raportdetail',['raport'=>$data]);

        // where('id_jenis',$id)->get();
        return view('guru.raportdetail', compact('id','siswa'));      

    }

    public function input_raport(Request $request, $id)
    {
        $NAG= $request->input("NAG");
        $fisik_monotorik= $request->input("fisik_monotorik");
        $sosial_emosional= $request->input("sosial_emosional");
        $kognitif= $request->input("kognitif");
        $bahasa= $request->input("bahasa");
        $seni= $request->input("seni");
        $siswa= $id;
        $semester= $request->input("semester");
        $tahun= $request->input("tahun");

        raport::create([
            'NAG'=>$NAG,
            'fisik_monotorik'=>$fisik_monotorik,
            'sosial_emosional'=>$sosial_emosional,
            'kognitif'=>$kognitif,
            'bahasa'=>$bahasa,
            'seni'=>$seni,
            'siswa'=>$siswa,
            'semester'=>$semester,
            'tahun'=>$tahun]);
        return redirect("/guru/raport");
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
