<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }


    public function index()    //creamos index para ver admin
    {
        if (isAdmin::user()->roles[0]->name == 'Admin')   
            return view('admin');
        return view('welcome');
    }
}
