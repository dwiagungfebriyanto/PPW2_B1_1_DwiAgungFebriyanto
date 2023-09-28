<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;

class BarangController extends Controller
{
    public function index() {
        $data_barang = Barang::all()->sortByDesc('id');
        $no = 0;
        return view('barang.index', compact('data_barang'));
    }
}
