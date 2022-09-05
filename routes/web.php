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


Auth::routes();
Route::get('/', [App\Http\Controllers\CrudController::class, 'index']);
Route::get('/view_all', [App\Http\Controllers\CrudController::class, 'view_all']);
Route::get('/create_content', [App\Http\Controllers\CrudController::class, 'create_content']);
Route::get('/edit_content/{id}', [App\Http\Controllers\CrudController::class, 'edit_content']);
Route::get('/view_content/{id}', [App\Http\Controllers\CrudController::class, 'view_content']);
Route::post('/save_content/{id}', [App\Http\Controllers\CrudController::class, 'save_content']);
