<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function get_daftar_barang(){
        $daftar_barang = Barang::paginate(5);
        return view('beranda', ['daftar_barang' => $daftar_barang]);
    }

}
