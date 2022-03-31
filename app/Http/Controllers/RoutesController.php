<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RoutesController extends Controller
{

//muestra listado de registros...GET
    public function index()
    {
        $routes = Route::orderBy("id", "desc")->paginate(6);
        return view('routes.index', compact('routes'));  //puedo usar la $routes en la vista index
    }

//muestra formulario para insertar nuevo registro...GET
    public function create()
    {
        return view('routes.create');
    }


//cualquier cosa que se envie en el formulario se almacena en $request....POST
    public function store(Request $request)
    {
        //dd($request->all());
        // dd($request->["distance"]);
        // return $request->all();

        $route = new Route();
        $route->name = $request->name;
        $route->altitude = $request->altitude;
        $route->distance = $request->distance;
        $route->elevationgain = $request->elevationgain;
        $route->time = $request->time;
        $route->difficulty = $request->difficulty;
        $route->location = $request->location;
        $route->description = $request->description;
        $route->image = $request->image;

        if($request->hasFile('image')){
            $route['image']=$request->File('image')->store('storage','public');
        }

        $route->save();
        return redirect()->route('routes.index', $route);

        // return $routes;    
    }

//recupera datos de un registro en particular....GET
    public function show(Route $route)
    {
        return view('routes.show', compact('route'));
    }


//muestra formulario para modificar un registro...GET
    public function edit(Route $route)
    {  
        return view('routes.edit', compact('route'));
    }
    
//modifica un registro ...PUT
    public function update(Request $request, Route $route)
    {
        $route->name = $request->name;
        $route->altitude = $request->altitude;
        $route->distance = $request->distance;
        $route->elevationgain = $request->elevationgain;
        $route->time = $request->time;
        $route->difficulty = $request->difficulty;
        $route->location = $request->location;
        $route->description = $request->description;
        $route->image = $request->image;

        if($request->hasFile('image')){
            $route['image']=$request->File('image')->store('storage','public');
        }
        
        $route->save();
        
        return redirect()->route('routes.index', $route);
    }


//elimina un registro ...DELETE
    public function destroy(Route $route)
    {
        $route->delete();
        return redirect()->route('routes.index');
    }
}
