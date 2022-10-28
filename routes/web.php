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


Route::get('/', [TodoController::class, 'index']);

Route::get('create', [TodoController::class, 'create']);

Route::get('details', [TodoController::class, 'details']);
Route::get('edit', [TodoController::class, 'edit']);
Route::post('update', [TodoController::class, 'update']);

Route::get('delete', [TodoController::class, 'delete']);
