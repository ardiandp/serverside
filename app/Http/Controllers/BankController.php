<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bcacv;
use App\Models\Bcaardian;
use App\Models\Bcaakhdan;
class BankController extends Controller
{
   public function bcacv()
   {
    $bank = Bcacv::latest()->get();
    return view('bank.bcacv',compact('bank'));   
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
