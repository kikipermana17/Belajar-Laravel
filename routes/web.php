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
        ['nis' => 1, 'nama' => 'Alya', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Nata ENdah'],
        ['nis' => 2, 'nama' => 'Anggi', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Bojong Cilebak'],
        ['nis' => 3, 'nama' => 'Anisa', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Bojong Tanjung'],
        ['nis' => 4, 'nama' => 'Arif', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Cibedug Girang'],
        ['nis' => 5, 'nama' => 'Astri', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'PAsawahan'],
        ['nis' => 6, 'nama' => 'Azhar', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Sekeawi'],
        ['nis' => 7, 'nama' => 'Aziz', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Sekeawi'],
        ['nis' => 8, 'nama' => 'Bima', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Nusa'],
        ['nis' => 9, 'nama' => 'Cindy', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
        ['nis' => 10, 'nama' => 'Dinda', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Bojong Malaka'],
    ];
    // dd($data);
    return view('absen', compact('data'));
});
