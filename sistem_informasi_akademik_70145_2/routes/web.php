<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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
Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});



Route::get('/', function () {
    $dsn = [
        "Rini Mayasari",
        "Susilawati Sobur",
        "Iqbal Maulana",
        "Tesa Nur Padilah",
        "Betha Nurina Sari",
        "Intan Purnamasari",
        "Ratna Mufidah",
        "Purwanto",
        "Asep Jamaludin",
        "Arip Solehudin"
    ];
    return view('dosen')->with('dosen',$dsn);
});
Route::get('/matkul', function () {
    $mk = [
        'Tecnhopeuer',
        'Data Mining',
        'Pemrograman Berabasis Web',
        'Pancasila',
        'Budaya Bangsa',
        'Pemrograman Berbasis Mobile',
        'Framework Pemrograman Web',
        'Cloud Computing',
        'Jaringan Komputer',
        'Blockchain',
        ];
    return view('matakuliah')->with('matkul',$mk);;
});
Route::get('/mahasiswa', function () {
    $mhs = [
        "Habillah Darma",
        "Harvian Arga Adi Putra",
        "Fauzan Arista",
        "Gilang Maulana",
        "Hanna Athaya",
        "Gidion Bagas",
        "Hagi Azzam",
        "Jaka Prasetya",
        "Ihsan Muhammad Sobari",
        "Lily",
        ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});