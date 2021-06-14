<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Norekening;
use DataTables;

class NorekeningController extends Controller
{
    public function index(Request $request)

    {

        if ($request->ajax()) {

            $data = norekening::select('*');

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
        return view('bank.norekening');

    }
}
