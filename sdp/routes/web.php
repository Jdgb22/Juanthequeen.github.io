<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajustes', function(){
    return view('ajustes');
});

Route::get('/inicio', function(){
    return view('inicio');
});
Route::get('/producto', function(){
    return view('producto');
});

Route::get('/empl', function(){
    return view('empl');
});

Route::get('/inven', function(){
    return view('inven');
});
Route::get('/empl1', function(){
    return view('empl1');
});
Route::get('/empl2', function(){
    return view('empl2');
});
Route::get('/empl3', function(){
    return view('empl3');
});
Route::get('/empleadomh', function(){
    return view('empleadomh');
});
Route::get('/empleadojd', function(){
    return view('empleadojd');
});
Route::get('/empleadola', function(){
    return view('empleadola');
});
Route::get('/empleadolm', function(){
    return view('empleadolm');
});
Route::resource('empleado', EmpleadoController::class);