<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function suplier()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }
}
