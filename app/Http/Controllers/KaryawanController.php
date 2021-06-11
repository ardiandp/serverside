<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use DataTables;

class KaryawanController extends Controller
{
    //
    public function index(Request $request)

    {

        if ($request->ajax()) {

            $data = Karyawan::select('*');

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){     

                           $btn = '<a href="karyawan/profil/111" class="edit btn btn-primary btn-sm">View</a>  ';   

                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);

        }       
        	//echo "$data";
        return view('karyawan.index');

    }

    public function tambah()
    {
    	return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
    	 $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('storage/foto_karyawan'), $imageName);

        $kry = New Karyawan;
        $kry->nik = $request->nik;
        $kry->nama = $request->nama;
        $kry->alamat = $request->alamat;
        $kry->telp = $request->telp;
        $kry->agama = $request->agama;
        $kry->jk = $request->jk;
        $kry->status = $request->status;
        $kry->tempat_lahir = $request->tempat_lahir;
        $kry->tanggal_lahir = $request->tanggal_lahir;
        $kry->foto = $imageName;
        $kry->aktif = $request->aktif;
        $kry->save();

        return back()
        	->with('success','You have successfully upload image.');

    }

    public function profil($id)
    {
    	return view('karyawan.profil');
    }
}
