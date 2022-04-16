<?php

namespace App\View\Components;

use App\Models\Route;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class CardRoutes extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     * 
     */
    public $route;
    public function __construct($route)
    {
        //viene de rutas.blade :route
        $this->route=$route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // $routes = Route::select('name')->where('id', '=', $id)->first();

        return view('components.card-routes');
    }

}
