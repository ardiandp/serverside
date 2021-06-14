<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kdbank;
use DataTables;

class KdbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

        if ($request->ajax()) {

            $data = Kdbank::select('*');

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){     

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a> <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a> ';   

                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);

        }       
        	//echo "$data";
        return view('bank.kdbank');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bank' =>'required',
            'kode' => 'required',
        ]);

        Kdbank::create($request->all());
        return back()
        ->with('success','bank Creates Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit = Kdbank::FIndOrFail($id);
       $kdbank = Kdbank::latest()->get();
       return view('bank.edit_kdbank')
       ->withEdit($edit)
       ->withKdbank($kdbank);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kdbank::find($id)->delete();
        return redirect()->back()
        ->with('success','data berjasil di hapus ');
    }
}
