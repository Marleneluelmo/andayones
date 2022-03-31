<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RoutesDetailsController extends Controller
{
    public function index(){

        return view('routesdetails');
    }

    public function show($id)
    {
        $route = Route::find($id);
        return view('routes.show', compact('route'));
    }

}
