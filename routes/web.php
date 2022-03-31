<?php

use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');


Route::get('admin',function(){
    return view('admin');
})->middleware("isAdmin");


//home y  navbar
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rutas', [App\Http\Controllers\RutasController::class, 'index'])->name('rutas');
Route::get('/picos', [App\Http\Controllers\PicosController::class, 'index'])->name('picos');
Route::get('/ferrata', [App\Http\Controllers\FerrataController::class, 'index'])->name('ferrata');
Route::get('/trip', [App\Http\Controllers\TripController::class, 'index'])->name('viaje');
Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('nosotros');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contacto');



//detalle de rutas
Route::get('/routesdetails/{id}', [App\Http\Controllers\RoutesDetailsController::class, 'show'])->name('routesdetails');
// Route::get('/routesdetails', [App\Http\Controllers\RoutesDetailsController::class, 'index'])->name('routesdetails.index');

//adminrutasroutes
// Route::resource('routes', RoutesController::class);
//muestra el listado de rutas CRUD
Route::get('/routes', [App\Http\Controllers\RoutesController::class, 'index'])->name('routes.index');
//muestra el formulario y envia los datos
Route::get('/routes/create', [App\Http\Controllers\RoutesController::class, 'create'])->name('routes.create');
//recibe la informacion del formulario. Con post distingue entre el /routes de get y el de post
Route::post('/routes', [App\Http\Controllers\RoutesController::class, 'store'])->name('routes.store');
Route::get('/routes/{route}', [App\Http\Controllers\RoutesController::class, 'show'])->name('routes.show');
//recibe la info de la tabla y la pone en un formulario
Route::get('/routes/{route}/edit', [App\Http\Controllers\RoutesController::class, 'edit'])->name('routes.edit');
//modifica la info cargada en el formulario y la actualiza
Route::put('/routes/{route}', [App\Http\Controllers\RoutesController::class, 'update'])->name('routes.update');

Route::delete('/routes/{route}', [App\Http\Controllers\RoutesController::class, 'destroy'])->name('routes.destroy');





// Route::middleware(['auth', 'isAdmin'])->group(function () {
//         Route::get('/admin')
//         // Your defined routes go here
//     };

// Route::middleware(['isAdmin'])->group(function () {
//     Route::get('/home', function () {
        
//     });
 
//     Route::get('/formruta', function () {
        
//     });
// });

// Route::middleware('isAdmin')->get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

// Route::get('prueba', function () {
//     return 'hola admin';
// })->middleware('isAdmin');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
//     return Redirect::route('welcome');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->get('/admin', [AdminController::class, 'index'])->name('admin');



// Route::get('login',[AuthController::class,'index'])->name('login'); //named route