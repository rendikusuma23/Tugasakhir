<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class ubahpasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function ganti(Request $request){
        if ($request->input('baru')!=$request->input('konfirmasi')) {
            # code...
            return redirect('/guru/profil')->with(['icon'=>'error','sukses'=>'Konfirmasi password tidak sesuai']);
        }
        $user = User::where('id', Auth::user()->id)->first();
        if ($user) {
            if (password_verify($request->input('lama'), $user->password)) {
                User::where('id',Auth::user()->id)->update(['password' => Hash::make($request->input('baru'))]);
                return redirect('/guru/profil')->with(['icon'=>'success','sukses'=>'Password berhasil diganti']);
            }
            return redirect('/guru/profil')->with(['icon'=>'error','sukses'=>'Password lama salah']);
        }
    }
}
