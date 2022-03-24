<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicosController extends Controller
{
    public function index(){
        return view('picos');
    }
}
