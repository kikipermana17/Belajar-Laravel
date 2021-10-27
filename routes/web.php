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

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('hal2', function () {
// //     return "<h1>Selamat Datang Dihalaman Kedua</h1>";
// // });

// Route::get('biodata', function () {
//     $nama = "Kiki Permana";
//     $jk = "Laki-Laki";
//     $tempatLahir = "Bandung";
//     $tanggalLahir = "17 September";
//     $alamat = "kp.Bojong Cijerah";
//     $agama = "Islam";
//     $hobi = "Main Game";

//     return "<h1>Biodata</h1><br>
//             Nama            : " . $nama . "<br>
//             Jenis Kelamin   : " . $jk . "<br>
//             Tempat Lahir    : " . $tempatLahir . "<br>
//             Tanggal Lahir   : " . $tanggalLahir . "<br>
//             Alamat          : " . $alamat . "<br>
//             Agama           : " . $agama . "<br>
//             Hobi            : " . $hobi . "<br>";
// });

// Route::get('biodata2', function () {

//     $nama = "Kiw Permana";
//     $jk = "Laki-Laki";
//     $tempatLahir = "Bandung";
//     $tanggalLahir = "17 September";
//     $alamat = "kp.Bojong Cijerah";
//     $agama = "Islam";
//     $hobi = "Main Game";

//     return view('biodata', compact('nama', 'jk', 'tempatLahir', 'tanggalLahir', 'alamat', 'agama', 'hobi'));
// });

// Route::get('/input/{nama}/{jeniskelamin}/{tempatLahir}/{tanggalLahir}/{alamat}/{agama}/{hobi}',
//     function ($nama, $jk, $tempatLahir, $tanggalLahir, $alamat, $agama, $hobi) {
//         echo " Nama         : " . $nama . "<br>
//             Jenis Kelamin   : " . $jk . "<br>
//             Tempat Lahir    : " . $tempatLahir . "<br>
//             Tanggal Lahir   : " . $tanggalLahir . "<br>
//             Alamat          : " . $alamat . "<br>
//             Agama           : " . $agama . "<br>
//             Hobi            : " . $hobi . "<br>";
//     });

// Route::get('blog', function () {
//     $data = [
//         ['id' => 1, 'title' => 'Lorem Ipsum', 'content' => 'Content Pertama'],
//         ['id' => 2, 'title' => 'Lorem Ipsum', 'content' => 'Content Kedua'],
//         ['id' => 3, 'title' => 'Lorem Ipsum', 'content' => 'Content Ketiga'],
//     ];
//     // dd($data);
//     return view('blog', compact('data'));
// });

Route::get('absen', function () {
    $data = [
        ['nis' => 1, 'nama' => 'Lorem Ipsum', 'jenisKelamin' => 'Content Pertama', 'alamat' => 'cibaduyut'],
        ['id' => 2, 'title' => 'Lorem Ipsum', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum', 'content' => 'Content Ketiga'],
    ];
    // dd($data);
    return view('blog', compact('data'));
});
