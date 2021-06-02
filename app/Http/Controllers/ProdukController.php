<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->get();
        return view('produk.index',compact('produk'));
    }

    public function create()
    {
         $kat = Kategori::latest()->get();
         return view('produk.create')
             ->withKat($kat);
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
        $pass->id_kategori = $request->id_kategori; 
        $pass->berat = $request->berat;
        $pass->keterangan = $request->keterangan;
        $pass->expired = $request->expired;
        $pass->publish = $request->publish;
        $pass->harga = $request->harga;
        $pass->gambar = $imageName;       
        $pass->save();

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }

    public function edit($id)
    {
         $edit = Produk::findOrFail($id);
         $kat  = Kategori::latest()->get();
        return view('produk.edit')
            ->withEdit($edit)
            ->withKat($kat);
    }

    public function update()
    {

    }

    public function destroy($id)
    {
        Produk::find($id)->delete();
        return redirect()->back()
         ->with('success','You have successfully Delete Produk.');
    }


}
