<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
      $users = User::get();
      return view('test.user',compact('users'));
    }

    public function destroy(Request $request,$id)
    {
      User::where('id',$id)->delete();
      return back();
    }
}
