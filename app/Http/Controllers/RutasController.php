<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function index(){

        $routes = Route::orderBy("id", "desc")->paginate(6);
        // $routes = Route::all();

        //la variable $routes va al rutas.blade y tiene todas las rutas
        return view('rutas', ['routes'=>$routes]);
    }
}
