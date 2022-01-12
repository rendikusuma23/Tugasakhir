<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_siswa;
use App\Nilai_perkembangan;
use Auth;


class perkembangansiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = data_siswa::where('email',Auth::user()->email)->first('id')->id;
        $data = Nilai_perkembangan::join('kompetisi_indikators',
        'nilai_perkembangans.kompetisi_indikators','=','kompetisi_indikators.id')
        ->join('lingkup_perkembangans',
            'kompetisi_indikators.lingkup_perkembangan','=','lingkup_perkembangans.id')
        ->where('nilai_perkembangans.siswa',$id)
        ->get([
            'nilai_perkembangans.bulan',
            'kompetisi_indikators.id',
            'lingkup_perkembangans.nama as lingkup_perkembangan',
            'kompetisi_indikators.nama',
            'nilai_perkembangans.kegiatan_anak',
            'nilai_perkembangans.hasil_karya',
            'nilai_perkembangans.hasil_akhir',
            'nilai_perkembangans.kesimpulan',
        ]);
        // echo \json_encode($data);
        return view('siswa/perkembangan', compact('data','id'));
    }
    public function filterperkembangansiswa(Request $request)
    {
            //
            // echo $request->kelas;
            $id = data_siswa::where('email',Auth::user()->email)->first('id')->id;
            if ($request->kelas == "Semua") {
                $where= ['nilai_perkembangans.siswa'=>$id];
            } else {
                $where= ['nilai_perkembangans.siswa'=>$id,'nilai_perkembangans.bulan'=>$request->bulan];
            }
            $siswa = data_siswa::where('id',$id)->first();
            $data = Nilai_perkembangan::join(
                'kompetisi_indikators',
                'nilai_perkembangans.kompetisi_indikators','=','kompetisi_indikators.id')
            ->join('lingkup_perkembangans',
                'kompetisi_indikators.lingkup_perkembangan','=','lingkup_perkembangans.id')
            ->where($where)
            ->get([
                'nilai_perkembangans.bulan',
                'kompetisi_indikators.id',
                'lingkup_perkembangans.nama as lingkup_perkembangan',
                'kompetisi_indikators.bulan',
                'kompetisi_indikators.nama',
                'kompetisi_indikators.bulan',
                'nilai_perkembangans.kegiatan_anak',
                'nilai_perkembangans.hasil_karya',
                'nilai_perkembangans.hasil_akhir',
                'nilai_perkembangans.kesimpulan',
            ]);
            return view('siswa/perkembangan', compact('data','id'));

        // $siswa = data_siswa::find($id);
        // // $data = nilai_perkembangan::all();
        // $lingkup = Lingkup_perkembangan::all();
        // // $kepentsi = Kompetisi_indikator::all();
        // $kompetensi = array();
        // $bulan="";
        // return view('siswa.perkembangan', compact('bulan','lingkup','siswa','kompetensi','id'));

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
        
        $data = Nilai_perkembangan::join('kompetisi_indikators',
        'nilai_perkembangans.kompetisi_indikators','=','kompetisi_indikators.id')
        ->join('lingkup_perkembangans',
            'kompetisi_indikators.lingkup_perkembangan','=','lingkup_perkembangans.id')
        ->where('Nilai_perkembangans.siswa',$id)
        ->get([
            'nilai_perkembangans.bulan',
            'kompetisi_indikators.id',
            'lingkup_perkembangans.nama as lingkup_perkembangan',
            'kompetisi_indikators.nama',
            'nilai_perkembangans.kegiatan_anak',
            'nilai_perkembangans.hasil_karya',
            'nilai_perkembangans.hasil_akhir',
            'nilai_perkembangans.kesimpulan',
        ]);
        // echo \json_encode($data);

        
        return view('operator/nilaiperkembangan/perkembangansiswa', compact('data','id'));
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
