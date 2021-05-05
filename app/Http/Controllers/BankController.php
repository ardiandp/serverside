<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bcacv;
use App\Models\Bcaardian;
use App\Models\Bcaakhdan;
use App\Imports\BanktempImport;
use App\Exports\BanktempExport;
use App\Exports\BankcvExport;
use Maatwebsite\Excel\Facades\Excel;
class BankController extends Controller
{
   public function bcacv()
   {
    $bank = Bcacv::latest()->get();
    return view('bank.bcacv',compact('bank'));   
   }

   public function bcacvimport()
   {
    return view('bank.bcacvimport');
   }

   public function bcacvimportsave()
   {
     Excel::import(new BanktempImport,request()->file('file'));
           
        return back();
   }

   public function bcacvexport()
   {
    // return Excel::download(new BanktempExport, 'banktemp.xlsx');
    return Excel::download(new BankcvExport, 'bcacv.xlsx');
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
