<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KdbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kdbnak = Kdbank::latest()->get();
        return view('bank.kdbank',compact('kdbank'));

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
        $valid = [
            'nama_bank'=>'requires',
            'kode'=>'required'
        ];
        $request->validate($valid);
        $kdbank = Kdbank::FIndOrFail($id);
        $kdbank>->update($request->all());

        return back()
        ->with('success','Update Sucessfull');
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
