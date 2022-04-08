<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RoutesDetailsController extends Controller
{

    public function show($id)
    {
        $route = Route::find($id);
        return view('routesdetails', compact('route'));
    }

}
