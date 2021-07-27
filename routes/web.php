<?php

use App\Http\Controllers\pembayaranController;
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
Route::get('/', function () {
    
    return view('front');
});

//tambah data guru
Route::resource('/operator/dataguru', 'tambahguruController');

Route::get('/', function () {
    return view('front');
});
// operator
Route::resource('/operator/pendaftaran', 'OperatorPendaftaranController' );
Route::resource('/operator/datasiswa', 'datasiswaController' );
// Route::resource('/operator/detailsiswa', 'detailsiswaController' );
Route::resource('/operator/akun', 'akunController' );
Route::resource('/operator/pembayaran', 'pembayaranController' );
Route::resource('/operator/raport', 'raportOperatorController' );
Route::resource('/operator/perkembangan', 'perkembanganController' );


//guru
Route::resource('/guru/profil', 'profilguruController');
Route::resource('/guru/perkembangan', 'perkembanganguruController');
Route::resource('/guru/raport', 'raportController');

Route::get('/', function () {
    return view('front');
});
//siswa
Route::resource('/siswa/profil', 'profilsiswaController');
Route::resource('/siswa/raport', 'raportsiswaController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin','AdminController@index');

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

    Route::get('/operator/dataguru/detailguru', function () {
        return view('/operator/detailguru');
    });

    // Route::get('/operator/dataguru/tambahguru', function () {
    //     return view('/operator/tambahguru');
    // });

    // Route::get('/operator/datasiswa/detailsiswa', function () {
    //     return view('/operator/detailsiswa');
    // });

    // Route::get('/operator/dataguru/tambahsiswa', function () {
    //     return view('/operator/tambahsiswa');
    // });

    //pembayaran
    // Route::post('guru/inputraport/{id}', 'raportController@input_raport');

    Route::get('/operator/pembayaran/bayar/{id}/{bulan}','pembayaranController@bayar');

    Route::get('/operator/bayardetail', function () {
        return view('/operator/bayardetail');
    });

    //akun
    // Route::get('/operator/akun', function () {
    //     return view('/operator/akun');
    // });

    //guru
    Route::get('/guru/ubahemail', function () {
        return view('/guru/ubahemail');
    });
    Route::get('/guru/ubahpassword', function () {
        return view('/guru/ubahpassword');
    });

    // Route::get('/guru/akreditasi', function () {
    //     return view('/guru/akreditasi');
    // });

    // Route::get('/guru/perkembangan', function () {
    //     return view('/guru/perkembangan');
    // });
    Route::get('/guru/perkembangan/perkembangandetail', function () {
        return view('/guru/perkembangandetail');
    });
    // Route::get('/guru/raport', function () {
    //     return view('/guru/raport');
    // });
    // Route::post('/guru/inputraport', function () {
    //     return view('/guru/raportdetail');
    // });

    Route::post('guru/inputraport/{id}', 'raportController@input_raport');

    Route::get('/siswa/ubahemail', function () {
        return view('/siswa/ubahemail');
    });   
    Route::get('/siswa/ubahpassword', function () {
        return view('/siswa/ubahpassword');
    });
    Route::resource('/siswa/pembayaran','pembayaransiswaController');
    Route::get('/siswa/perkembangan', function () {
        return view('/siswa/perkembangan');
    });
    Route::post('/filter/datasiswa', 'datasiswaController@filtersiswa');
    // Route::get('/siswa/raport', function () {
    //     return view('/siswa/raport');
    // });

});