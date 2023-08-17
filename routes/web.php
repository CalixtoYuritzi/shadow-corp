<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    if(\Auth::check()){//Si le damos volver no va a volver al panel

        return redirect('/home');

    }else{
        return redirect()->route('sitio.index');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'sitio'], function (){

    Route::get( '/index', [App\Http\Controllers\FrontEndController::class, 'index'])->name('sitio.index');
    Route::get( '/nosotros', [App\Http\Controllers\FrontEndController::class, 'nosotros'])->name('sitio.nosotros');
    Route::get( '/servicios', [App\Http\Controllers\FrontEndController::class, 'servicios'])->name('sitio.servicios');
    Route::get( '/juego', [App\Http\Controllers\FrontEndController::class, 'juego'])->name('sitio.juego');
    Route::get( '/still', [App\Http\Controllers\FrontEndController::class, 'still'])->name('sitio.still');
    Route::get( '/contacto', [App\Http\Controllers\FrontEndController::class, 'contacto'])->name('sitio.contacto');
    Route::get( '/login', [App\Http\Controllers\FrontEndController::class, 'login'])->name('sitio.login');
});
