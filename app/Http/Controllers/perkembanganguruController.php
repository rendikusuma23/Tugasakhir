<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_siswa;
use App\nilai_perkembangan;
use App\Lingkup_perkembangan;
use App\Kompetisi_indikator;

class perkembanganguruController extends Controller
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
        return view('guru.perkembangan', compact('data'));
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
        
        return view('guru.perkembangan', compact('data'));
    }

    public function filternilaisiswa(Request $request,$id)
    {
        //
        // echo $request->kelas;
        if ($request->kelas == "Semua") {
            $where= ['nilai_perkembangans.siswa'=>$id];
        } else {
            $where= ['nilai_perkembangans.siswa'=>$id,'Nilai_perkembangans.bulan'=>$request->bulan];
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
            'kompetisi_indikators.nama',
            'kompetisi_indikators.bulan',
            'kompetisi_indikators.bulan',
            'nilai_perkembangans.kegiatan_anak',
            'nilai_perkembangans.hasil_karya',
            'nilai_perkembangans.hasil_akhir',
            'nilai_perkembangans.kesimpulan',
        ]);
        return view('guru/lihatperkembangan', compact('data','id','siswa'));

    }

    public function filterbulan(Request $request,$id)
    {
        //
        // echo $request->kelas;
        $siswa = data_siswa::find($id);
        // $data = nilai_perkembangan::all();
        $lingkup = Lingkup_perkembangan::all();
        // $kepentsi = Kompetisi_indikator::all();
        if ($request->bulan == "Semua") {
            $kompetensi = array();
        } else {
            $kompetensi = kompetisi_indikator::where('bulan',$request->bulan)->get();
        }
        $bulan =$request->bulan;
        return view('guru.perkembangandetail', compact('lingkup','siswa','kompetensi','id','bulan'));
        // $kompetensi = array();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $siswa = data_siswa::find($id);

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
        return view('guru/lihatperkembangan', compact('data','id','siswa'));
    
    }
    public function inputPerkembangan(Request $request, $id, $bulan)
    {
        //
        // $validateData = $request->validate([

        // ]);

        // $error= [
        //     'required' => ':attribute wajib diisi',
        //     'min' => ':attribute harus diisi minimal :min karakter',
        //     'max' => ':attribute harus diisi maksimal :max karakter',
        //     'numeric' => ':attribute harus diisi dengan angka',
        //     'email' => 'format :attribute yang anda inputkan salah ',
        //     'image' => ':attribute format yang anda inputkan salah',
        //     'date' => ':attribute tanggal harus sesuai'
        // ];

        // $this->validate($request,[
        //     'kompetisi_indikators' => 'required',
        //     'kegiatan_anak' => 'required|min:16',
        //     'hasil_karya' => 'required',
        //     'hasil_akhir' => 'required',
        //     'kesimpulan' => 'required',
            
        // ], $error);    


        echo $id.'<br>';
        echo $bulan.'<br>';
        $kompetensi = kompetisi_indikator::where('bulan',$bulan)->get();
        foreach ($kompetensi as $key => $value) {
            echo 'ka '.$request->input('ka'.$value['id']).'<br>';
            echo 'hk '.$request->input('hk'.$value['id']).'<br>';
            echo 'ha '.$request->input('ha'.$value['id']).'<br>';
            echo 'kesimpulan '.$request->input('kesimpulan'.$value['id']).'<br>';


        $siswa=$id;
        $kompetisi_indikator = $value['id'];
        $kegiatan_anak= $request->input('ka'.$value['id']);
        $hasil_karya= $request->input('hk'.$value['id']);
        $hasil_akhir= $request->input('ka'.$value['id']);
        $kesimpulan= $request->input('kesimpulan'.$value['id']);

        nilai_perkembangan::create([
            'siswa'=>$siswa,
            'bulan'=>$bulan,
            'kompetisi_indikators'=>$kompetisi_indikator,
            'kegiatan_anak'=>$kegiatan_anak,
            'hasil_karya'=>$hasil_karya,
            'hasil_akhir'=>$hasil_akhir,
            'kesimpulan'=>$kesimpulan,
        ]);
        }
        return redirect("/guru/perkembangan")->with(['icon'=>'success','sukses'=>'Data Perkembangan siswa Berhasil Ditambahkan']);
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
        $siswa = data_siswa::find($id);
        // $data = nilai_perkembangan::all();
        $lingkup = Lingkup_perkembangan::all();
        // $kepentsi = Kompetisi_indikator::all();
        $kompetensi = array();
        $bulan="";
        return view('guru.perkembangandetail', compact('bulan','lingkup','siswa','kompetensi','id'));

        
    }

    public function lihat($id)
    {
        $siswa = data_siswa::find($id);

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
        return view('guru/lihatperkembangan', compact('data','id','siswa'));

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
