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

/**
 * Generamos la ruta hacia el directorio raiz la cual va interactuar
 * con el controlador PostController en su metodo index()
 * 
 * Desde aca haremos la configuraion visual de la informacion que gestionamos
 * a traves de nuestra API.
 */

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);