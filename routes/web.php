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
    return view('welcome');
});


Route::get('/edit-biodata', [App\Http\Controllers\BiodataController::class, 'edit'])->name('edit-biodata');
Route::post('/update-biodata', [App\Http\Controllers\BiodataController::class, 'update'])->name('update-biodata');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/todos', [App\Http\Controllers\TodosController::class, 'index'])->name('todos');


