<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;

class PesananController extends Controller
{
    public function pesanan()
    {
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
}
