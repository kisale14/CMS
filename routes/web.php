<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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

Route::get("/", [CrudController::class, "index"])->name('crud.index');

Route::get("about", [CrudController::class, "show"])->name('crud.show');

Route::view("/home", "home")->name('home');

Route::get("new", [NewController::class, "show"])->name('new.show');

Route::get("newi", [NewController::class, "index"])->name('new.index');

Route::post("/registrar-post", [NewController::class, "create"])->name('new.create');

Route::post("/modificar-post", [NewController::class, "update"])->name('new.update');

Route::get("/eliminar-post-{id}", [NewController::class, "delete"])->name('new.delete');

Route::post("/registrar-producto", [CrudController::class, "create"])->name('crud.create');

Route::post("/modificar-producto", [CrudController::class, "update"])->name('crud.update');

Route::get("/eliminar-producto-{id}", [CrudController::class, "delete"])->name('crud.delete');

Route::get("/eliminar-producto-{id}", [CrudController::class, "delete"])->name('crud.delete');
