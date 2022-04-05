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

        if( !$route->users->contains( Auth::user()->id ) ){

            $route->users()->attach( Auth::user()->id, [
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
                ] );         
        }

        else {$route->users()->detach( Auth::user()->id, [
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
            ] ); }

        return redirect()->back();
        //If the user doesn't already favourited the route, attaches the route to the user's favs
    
       

    }

}


// <span class="like-btn">
//     <i id="like{{$post->id}}" class="glyphicon glyphicon-heart {{ $post->favoriters()->count() > 0  ? 'like-post' : '' }}"></i>
// </span>