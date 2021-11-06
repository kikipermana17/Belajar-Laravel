<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SuplierController;
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

// Route::get('absen', function () {
//     $data = [
//         ['nis' => 1, 'nama' => 'Alya', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Nata ENdah'],
//         ['nis' => 2, 'nama' => 'Anggi', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Bojong Cilebak'],
//         ['nis' => 3, 'nama' => 'Anisa', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Bojong Tanjung'],
//         ['nis' => 4, 'nama' => 'Arif', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Cibedug Girang'],
//         ['nis' => 5, 'nama' => 'Astri', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'PAsawahan'],
//         ['nis' => 6, 'nama' => 'Azhar', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Sekeawi'],
//         ['nis' => 7, 'nama' => 'Aziz', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Sekeawi'],
//         ['nis' => 8, 'nama' => 'Bima', 'jenisKelamin' => 'Laki Laki', 'Kelas' => 'XII RPL 3', 'alamat' => 'Nusa'],
//         ['nis' => 9, 'nama' => 'Cindy', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Rancamanyar'],
//         ['nis' => 10, 'nama' => 'Dinda', 'jenisKelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'alamat' => 'Bojong Malaka'],
//     ];
//     // dd($data);
//     return view('absen', compact('data'));
// });

// Route::get('siswa', function () {
//     $data = [
//         ['id' => 1,
//             'nama' => 'Kiki Permana',
//             'username' => 'Kiki',
//             'email' => 'kikiper@gmail.com',
//             'alamat' => 'Bandung',
//             'mapel' => [
//                 'mapel1' => 'Bahasa Indonesia',
//                 'mapel2' => 'Bahasa Inggris',
//                 'mapel3' => 'Bahasa Jepang',
//                 'mapel4' => 'Bahasa Belanda',
//             ],
//         ],
//     ];
//     // dd($data);
//     return view('siswa', compact('data'));
// });

// Route::get('/input/{nama?}/{kelas?}', function ($nama = null, $kelas = null) {
//     echo "Nama Saya : " . $nama;
//     echo "<br>";
//     echo "Kelas : " . $kelas;

// });

// Route::get('/nilai/{nama?}/{mtk?}/{pro?}/{indo?}/{ingris?}', function ($nama = null, $mtk = 0, $pro = 0, $indo = 0, $ingris = 0) {
//     echo "Nama Saya:" . $nama . "<br>";
//     echo "Nilai Maatematika : " . $mtk . "<br>";
//     echo "Nilai Produktif : " . $pro . "<br>";
//     echo "Nilai Bahasa Indonesia :  " . $indo . "<br>";
//     echo "Nilai Bahsa Inggris : " . $ingris . "<br>";

//     $ratarata = ($mtk + $pro + $indo + $ingris) / 4;

//     echo "Rata-rata :" . $ratarata . "<br>";
//     echo "Grade : ";
//     if ($ratarata >= 90) {
//         echo "A";
//     } elseif ($ratarata >= 80) {
//         echo "B";
//     } elseif ($ratarata >= 70) {
//         echo "C";
//     } else {
//         echo "D";
//     }
// });

// Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

//     if ($makanan = $makanan) {
//         echo "<b>Anda Memesan <br> Makan : </b>" . $makanan . "<br>";
//         if ($minuman = $minuman) {
//             echo "<b>Minum : </b>" . $minuman . "<br>";
//         }if ($cemilan = $cemilan) {
//             echo "<b>Cemilan :</b> " . $cemilan . "<br>";

//         }
//     } else {
//         echo "<b>Anda Tidak Memesan Silahkan Pulang</b>";
//     }
// });

// Route::get('/testmodel', function () {
//     $query = App\Models\Post::all();
//     return $query;
// });

// Route::get('/test', function () {
//     $query = App\Models\Post::all();
//     return view('test', compact('query'));
// });

// Route::get('/barang', function () {
//     $barang = App\Models\Barang::all();
//     return view('barang', compact('barang'));
// });

// Route::get('/pesanan', function () {
//     $pesanan = App\Models\Pesanan::all();
//     return view('pesanan', compact('pesanan'));
// });

// Route::get('/pembelian', function () {
//     $pembelian = App\Models\Pembelian::all();
//     return view('pembelian', compact('pembelian'));
// });

// Route::get('/pembeli', function () {
//     $pembeli = App\Models\Pembeli::all();
//     return view('pembeli', compact('pembeli'));
// });

// Route::get('/suplier', function () {
//     $suplier = App\Models\Suplier::all();
//     return view('suplier', compact('suplier'));
// });

Route::get('/barang', [BarangController::class, 'tampilkan']);

Route::get('/pesanan', [PesananController::class, 'pesanan']);

Route::get('/pembelian', [PembelianController::class, 'pembelian']);

Route::get('/pembeli', [PembeliController::class, 'pembeli']);

Route::get('/suplier', [SuplierController::class, 'suplier']);
