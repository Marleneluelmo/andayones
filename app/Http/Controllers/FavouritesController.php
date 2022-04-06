<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use Illuminate\Support\Facades\Auth;

class FavouritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
     
        $routes = Route::orderBy("id", "desc")->paginate(6);
        return view('routesfavourites', compact('routes'));

    }



    public function store($routeID)
    {
        
        $route = Route::where('id', '=', $routeID)->first();

        //al onclick si no está el usuario en la db de la pivot....(metodo users del modelo Route. Dentro de los usuarios de esta ruta quien esta en la tabla pivot)
        if( !$route->users->contains( Auth::user()->id ) ){
        //si no esta en la pivot incluye el usuario que esta logueado
            $route->users()->attach( Auth::user()->id, [
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
                ] );         
        }
        //si está en la db de la pivot lo borra
        else {$route->users()->detach( Auth::user()->id, [
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
            ] ); }

        return redirect()->back();
        //If the user doesn't already favourited the route, attaches the route to the user's favs
    }

}
