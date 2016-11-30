<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserpersonModel;

class UserpersonController extends Controller
{
    public function login(Request $request) {
        if (UserpersonModel::where('username','=',$request->input('user'))->where('password','=',$request->input('pass'))){
            return view('home');
        }        
    }
}
