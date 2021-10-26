<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hal2', function () {
//     return "<h1>Selamat Datang Dihalaman Kedua</h1>";
// });

Route::get('biodata', function () {
    $nama = "Kiki Permana";
    $jk = "Laki-Laki";
    $tempatLahir = "Bandung";
    $tanggalLahir = "17 September 2004";
    $alamat = "kp.Bojong Cijerah";
    $agama = "Islam";
    $hobi = "Main Game";

    return "<h1>Biodata</h1><br>
            Nama            : " . $nama . "<br>
            Jenis Kelamin   : " . $jk . "<br>
            Tempat Lahir    : " . $tempatLahir . "<br>
            Tanggal Lahir   : " . $tanggalLahir . "<br>
            Alamat          : " . $alamat . "<br>
            Agama           : " . $agama . "<br>
            Hobi            : " . $hobi . "<br>";
});

Route::get('biodata2', function () {

    $nama = "Kiw Permana";
    $jk = "Laki-Laki";
    $tempatLahir = "Bandung";
    $tanggalLahir = "17 September 2004";
    $alamat = "kp.Bojong Cijerah";
    $agama = "Islam";
    $hobi = "Main Game";

    return view('biodata', compact('nama', 'jk', 'tempatLahir', 'tanggalLahir', 'alamat', 'agama', 'hobi'));
});
