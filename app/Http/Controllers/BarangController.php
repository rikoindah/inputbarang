<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function create_product()
    {
        return view('inputproduk');
    }

    public function store_product(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required'
        
        ]);

     

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_barang' => $request->jumlah_barang
     
        ]);

        return Redirect::back();
    }
}
