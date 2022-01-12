<?php

use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\tambahguruController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/pendaftaran', 'PendaftaranController');
// Route::get('/', function () {
    
//     return view('front');
// });


// Route::get('/', function () {
//     return view('front');
// });
// Route::get('/', function () {
//     return view('front');
// });
Route::get('/','AdminController@index');
//siswa

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {

    // Route::get('/operator/pendaftaran/konfirmasipendaftaran', function () {
    //     return view('operator/konfirmasipendaftaran');
    // });

    // Route::get('/operator/perkembangan', function () {
    //     return view('operator/perkembangan');
    // });

    // Route::get('/operator/raport', function () {
    //     return view('operator/raport');
    // });


    // Route::get('/operator/datasiswa', function () {
    //     return view('operator/datasiswa');
    // });
//tambah data guru
Route::resource('/operator/dataguru', 'tambahguruController');
Route::Resource('data_guru','tambahguruController');
Route::Resource('data_siswa','datasiswaController');

// operator
Route::resource('/operator/pendaftaran', 'OperatorPendaftaranController' );
Route::resource('/operator/riwayatpendaftaran', 'riwayatpendaftaranController' );

Route::resource('/operator/datasiswa', 'datasiswaController' );  
// Route::resource('/operator/detailsiswa', 'detailsiswaController' );
Route::resource('/operator/akun', 'akunController' );
Route::resource('/operator/pembayaran', 'pembayaranController' );
Route::resource('/operator/raport', 'raportOperatorController' );
Route::resource('/operator/perkembangan', 'perkembanganController' );
Route::post('/filter/pembayaran', 'pembayaranController@filtersiswa');
Route::post('/filter/datasiswa', 'datasiswaController@filtersiswa');
// operator raport
Route::post('/filter/raportoperator', 'raportOperatorController@filterraportoperator');
Route::post('/operator/filter/semester/{id}', 'raportOperatorController@filtersemester');

// operator perkembangan
Route::resource('/operator/lingkupperkembangan', 'lingkupperkembanganController' );
Route::resource('/operator/kompetisiindikator', 'kompetisiindikatorController' );
Route::resource('/operator/nilaiperkembangan', 'nilaiperkembanganController' );
Route::Resource('lingkupperkembangan','lingkupperkembanganController');
Route::Resource('kompetisiindikator','kompetisiindikatorController');
//nilaiperkembangan
Route::post('/operator/filter/nilaiperkembangan', 'nilaiperkembanganController@filternilai');
Route::post('/operator/filter/perkembangan/{id}', 'nilaiperkembanganController@filternilaisiswa');




//guru
Route::resource('/guru/profil', 'profilguruController');
Route::resource('/guru/perkembangan', 'perkembanganguruController');
Route::resource('/guru/raport', 'raportController');
Route::post('/filter/perkembangan/{id}', 'perkembanganguruController@filterbulan');
Route::post('/perkembangan/{id}/{bulan}', 'perkembanganguruController@inputPerkembangan');
Route::post('/filter/perkembanganguru', 'perkembanganguruController@filtersiswa');
Route::post('/filter/raportguru', 'raportController@filtersiswa');

Route::post('/guru/filter/perkembangan/{id}', 'perkembanganguruController@filternilaisiswa');
Route::get('/guru/lihatraport/{id}', 'raportController@lihatraport');
Route::get('perkembanganguru/{id}', 'perkembanganguruController@lihat')->name('perkembanganguru.lihat');

Route::post('/guru/filter/lihatraport/{id}', 'raportController@filterlihatraport');

// guru.lihatraport

    Route::get('/operator/dataguru/detailguru', function () {
        return view('/operator/detailguru');
    });

        //pembayaran

    Route::get('/operator/pembayaran/bayar/{id}/{bulan}','pembayaranController@bayar');

    Route::get('/operator/bayardetail', function () {
        return view('/operator/bayardetail');
    });

    //guru
    Route::get('/guru/ubahemail', function () {
        return view('/guru/ubahemail');
    });
    Route::get('/guru/ubahpassword', function () {
        return view('/guru/ubahpassword');
    });

    //lihat
    // Route::get('/guru/lihatperkembangan', function () {
    //     return view('/guru/lihatperkembangan/{id}');
    // });

    // Route::get('/guru/akreditasi', function () {
    //     return view('/guru/akreditasi');
    // });

    // Route::get('/guru/perkembangan', function () {
    //     return view('/guru/perkembangan');
    // });
    // Route::get('/guru/perkembangan/perkembangandetail', function () {
    //     return view('/guru/perkembangandetail');
    // });
    // Route::get('/guru/raport', function () {
    //     return view('/guru/raport');
    // });
    // Route::post('/guru/inputraport', function () {
    //     return view('/guru/raportdetail');
    // });

    Route::post('guru/inputraport/{id}', 'raportController@input_raport');

//siswa 
    Route::get('/siswa/ubahemail', function () {
        return view('/siswa/ubahemail');
    });   
    Route::get('/siswa/ubahpassword', function () {
        return view('/siswa/ubahpassword');
    });
    Route::resource('/siswa/pembayaran','pembayaransiswaController');
    Route::resource('/siswa/perkembangan','perkembangansiswaController');

    
    Route::resource('/siswa/profil', 'profilsiswaController');
    Route::resource('/siswa/raport', 'raportsiswaController');
    Route::post('/filter/raport', 'raportsiswaController@filtersiswaraport');
    Route::get('/siswa/filter/perkembangansiswa/', 'perkembangansiswaController@filterperkembangansiswa');


    //ganti password
    Route::post('/guru/gantipassword','ubahpasswordController@ganti');

});