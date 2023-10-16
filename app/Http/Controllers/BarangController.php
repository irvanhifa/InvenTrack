<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $daftar_barang = Barang::paginate(10);
        return view('beranda', ['daftar_barang' => $daftar_barang]);
    }

}
