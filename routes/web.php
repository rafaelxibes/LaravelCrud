<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Route::get('/', [CrudController::class, 'index']);
Route::post('/user', [CrudController::class, 'store']);
Route::delete('/delete{id}', [CrudController::class, 'destroy']);
Route::get('/edit{id}', [CrudController::class, 'edit']);
Route::put('/update{id}', [CrudController::class, 'update']);
