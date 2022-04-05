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
     
    }



    public function store($routeID)
    {
        $route = Route::where('id', '=', $routeID)->first();

        
        //If the user doesn't already favourited the route, attaches the route to the user's favs
        
        $route->users()->attach( Auth::user()->id, [
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
            ] );
            return redirect()->back();

    }

}
