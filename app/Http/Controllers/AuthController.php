<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('admin');
    }

    function admin(){
        return view('admin');
    }

    function staf_aset(){
        return view('admin');
    }
}
