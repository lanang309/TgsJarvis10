<?php

use App\Http\Controllers\PerkenalanController;
use App\Http\Controllers\PustakawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route untuk menampilkan data Perkenalan
Route::get('/dirisendiri', [PerkenalanController::class, 'perkenalan']);

//Get all resources
Route::get('/pustakawan', [PustakawanController::class, 'index']);

//Post add resource
Route::post('pustakawan', [PustakawanController::class, 'pegawai']);

//Get data resource
Route::get('/pustakawan/{id}', [PustakawanController::class, 'show']);

//Edit resources
Route::put('/pustakawan/{id}', [PustakawanController::class, 'update']);