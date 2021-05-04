<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->get();
        return view('produk.index',compact('produk'));
    }

    public function create()
    {

        return view('produk.create');
    }
}
