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

    public function store(Request $request)
    {
        
    	/*$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'kode_produk' => 'required|min:3',
        ]); */
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('storage/images'), $imageName);


        //$request->validate($valid);  
        $pass = new Produk;     
        $pass->kode_produk = $request->kode_produk;
        $pass->nama_produk = $request->nama_produk;
        $pass->id_kategori = $request->nama_produk; 
        $pass->berat = $request->nama_produk;
        $pass->keterangan = $request->nama_produk;
        $pass->expired = $request->nama_produk;
        $pass->publish = $request->nama_produk;
        $pass->harga = $request->nama_produk;
        $pass->gambar = $imageName;       
        $pass->save();

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
}
