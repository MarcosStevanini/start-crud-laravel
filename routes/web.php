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
    return view('layouts.app');
}); 

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');

Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/{id}/editar', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Route::put('/{id}/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/{id}/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');