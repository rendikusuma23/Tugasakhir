<?php

namespace App\Http\Controllers;

use App\data_siswa;
use App\Nilai_perkembangan;
use Illuminate\Http\Request;

class nilaiperkembanganController extends Controller
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
        return view('operator/nilaiperkembangan/index', compact('data'));
    }

    public function filternilai(Request $request)
    {
        //
        // echo $request->kelas;
        if ($request->kelas == "Semua") {
            $data = data_siswa::all();
        } else {
            $data = data_siswa::where('kelas',$request->kelas)->get();
        }
        
        return view('operator/nilaiperkembangan/index', compact('data'));
    }
    public function filternilaisiswa(Request $request,$id)
    {
        //
        // echo $request->kelas;
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
        return view('operator/nilaiperkembangan/perkembangansiswa', compact('data','id','siswa'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('operator/nilaiperkembangan/tambahdata', compact('data'));

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
        nilai_perkembangan::create([
            'nama'=>$nama
        
        ]);
        return redirect("/operator/nilaiperkembangan")->with(['icon'=>'success','sukses'=>'Data Lingkup Perkembangan Berhasil Ditambahkan']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = data_siswa::find($id);

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
        return view('operator/nilaiperkembangan/perkembangansiswa', compact('data','id','siswa'));

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
        return redirect(route('nilaiperkembangan.index'))->with(['icon'=>'error','sukses'=>'Data Nilai Perkembangan Berhasil Dihapus']);

    }
}
