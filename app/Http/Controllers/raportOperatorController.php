<?php

namespace App\Http\Controllers;

use App\data_siswa;
use Illuminate\Http\Request;
use App\raport;

class raportOperatorController extends Controller
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
        return view('operator.raport', compact('data'));
    }

    public function filterraportoperator(Request $request)
    {
        //
        // echo $request->kelas;
        if ($request->kelas == "Semua") {
            $data = data_siswa::all();
        } else {
            $data = data_siswa::where('kelas',$request->kelas)->get();
        }
        
        return view('/operator.raport', compact('data'));
    }
    public function filtersemester(Request $request,$id)
    {
        //
        $siswa = data_siswa::where('id',$id)->first();
        // echo $request->kelas;
        if ($request->semester == "Semua") {
            // $data = data_siswa::all();
            $data = raport::where('siswa',$id)->get();
        } else {
            // echo $request->semester;
            $data = raport::where(['siswa'=>$id,'semester'=>$request->semester])->get();
            // echo $data;
            // $data = data_siswa::where('kelas',$request->semester)->get();
        }
        return view('/operator/raportdetail',['data'=>$data,'id'=>$id,'siswa'=>$siswa]);
        // return view('/operator.raportdetail', compact('data'));
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
        $siswa = data_siswa::where('id',$id)->first();
        $data = raport::where('siswa',$id)->get();
        return view('/operator/raportdetail',['data'=>$data,'id'=>$id,'siswa'=>$siswa]);
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
