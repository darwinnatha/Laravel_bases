<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PagesController::class, 'home']);

Route::get('/about', [PagesController::class, 'apropos']);

Route::get('/services', [PagesController::class, 'service']);

Route::get("/show/{id}", [PagesController::class, 'propriete']);

Route::get("/add", [ProductsController::class, 'add']);

Route::post("/saveproduct", [ProductsController::class, 'create']);

Route::delete('/deleteprod/{id}', [ProductsController::class, 'delete']);

Route::get('/editprod/{id}', [ProductsController::class, 'editprod']);

Route::put('/edit/{id}', [ProductsController::class, 'edit']);
