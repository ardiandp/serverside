<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bcacv;
use App\Models\Bcaardian;
use App\Models\Bcaakhdan;
use App\Models\banktemp;
use App\Imports\BanktempImport;
use App\Exports\BanktempExport;
use App\Exports\BankcvExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
class BankController extends Controller
{
   public function bcacv()
   {
    $bank = Bcacv::latest()->get();
    return view('bank.bcacv',compact('bank'));   
   }

   public function bcacvimport()
   {
      $temp = Banktemp::latest()->get();
      return view('bank.bcacvimport',compact('temp'));
   }

   public function bcacvimportsave()
   {
     Excel::import(new BanktempImport,request()->file('file'));
           
        return back()
         ->with('success','Import Data Successfull');
   }

   public function bcacvexport()
   {
    // return Excel::download(new BanktempExport, 'banktemp.xlsx');
    return Excel::download(new BankcvExport, 'bcacv.xlsx');
   }

   public function bcatempempty()
   {
      DB::select('call emptybanktemp()');
      return back()
         ->with('success','Data Temporary Berhasil Dikosongkan');
   }

   public function bcatemptocv()
   {
      DB::select('call copybank()');
      DB::select('call emptybanktemp()');
      return back()
         ->with('success','Data Temp Berhasil Dicopy ke Bank CV');
   }

   public function bcaardian()
   {
       $bank = Bcaardian::latest()->get();
       return view('bank.bcaardian',compact('bank'));
   }

   public function bcaakhdan()
   {
    $bank = Bcaakhdan::latest()->get();
    return view('bank.bcaakhdan',compact('bank'));
   }
}
