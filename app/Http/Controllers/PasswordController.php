<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Password;
class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pass = Password::latest()->get();
        return view('password.index',compact('pass'));
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {

            $data = Password::select('*');

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){     

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a> <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a> ';   

                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);

        }       

        return view('test.password');
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
       $pass = new Password;
        $pass->url = $request->url;
        $pass->username = $request->username;
        $pass->password = $request->password;
        $pass->save();

        //return redirect('/password'); 
         /* $request->validate([
            'url'     =>'required',
            'username'=> 'required',
            'password'=> 'password',
        ]);

        Password::create($request->all());*/
        return back()
         ->with('success','Password Created Successfull');
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
         $pass = Password::latest()->get();
         $edit = Password::findOrFail($id);
         //return view('password.edit',compact('pass'));

          return view('password.edit')
            ->withPass($pass)
            ->withEdit($edit);
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
            'url' => 'required|min:3|max:191',
            'username' => 'required|min:3',
            'password' => 'required|min:3',
        ];

         

        $request->validate($valid);

        $pass = Password::findOrFail($id);
        $pass->update($request->all());

        return back()
         ->with('success','Password Created Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Password::find($id)->delete();

        //return response()->json(['success'=>'Customer deleted!']);
        return redirect()->back();
    }
}
