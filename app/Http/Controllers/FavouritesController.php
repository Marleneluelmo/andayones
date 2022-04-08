<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FavouritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $user = Auth::user();
        $routes = array ();

        foreach($user->routes as $fav_route)
        {
            //busca en la pivot el id de la ruta
           $route_id = $fav_route->pivot->route_id; // Correctly gets the route_id
           //busca ese id en la table rutas y devuelve la ruta entera con todos los datos
           $fav_route = Route::where('id', '=', $route_id)->first();
           array_push($routes, $fav_route); 
        }

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
