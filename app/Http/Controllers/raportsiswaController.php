<?php

namespace App\Http\Controllers;

use App\data_siswa;
use Illuminate\Http\Request;
use App\raport;
use Auth;


class raportsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        // $data = raport::where('id',$id)->get();
        // return view('/siswa/raport',['siswa'=>$data]);./
        $siswa = data_siswa::where('email', Auth::user()->email)->pluck('id');
        $data = array();
        return view('/siswa/raport',compact('data'));

        // $data = raport::all();
        // return view('siswa.raport', compact('data'));
    }

    public function filtersiswaraport(Request $request)
    {
        //
        // echo $request->kelas;
        if ($request->tahun == "") {
            if ($request->semester == "") {
                $data = raport::all();
            } else {
                $data = raport::where(['semester'=>$request->semester])->get();
            }
        } else {
            if ($request->semester == "") {
                $data = raport::where(['tahun'=>$request->tahun])->get();
            } else {
                $data = raport::where(['tahun'=>$request->tahun, 'semester'=>$request->semester])->get();
            }
        }
        
        return view('siswa.raport', compact('data'));
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
        $data = raport::where('id',$id)->get();
        return view('/siswa/raport',['siswa'=>$data]);
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
