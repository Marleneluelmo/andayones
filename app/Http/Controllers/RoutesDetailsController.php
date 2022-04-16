<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RoutesDetailsController extends Controller
{
    //el id viene de web.php y muestra la página de
    public function show($id)
    {
        //busca ese id en la tabla Route y lo almacena en la variable $route
        $route = Route::find($id);
        //pasamos la variable a la vista routesdetail y muestra esa vista
        return view('routesdetails', compact('route'));
    }

}
