<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Facades;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// method GET  
Route::get('/animals', [AnimalController::class, 'index']);

// method POST
Route::post('/animals', [AnimalController::class, 'store']);

// method PUT 
Route::put('/animals', [AnimalController::class, 'update']);

// method DELETE
Route::delete('/animals', [AnimalController::class, 'destroy']);

// route students dgn method GET
Route::get('/students', [StudentController::class, 'index']);

// route students dgn method POST
Route::post('/students', [StudentController::class, 'store']);

// route students dgn method PUT
Route::put('/students/{id}', [StudentController::class, 'update']);

// route students dgn method DELETE
Route::delete('/students/{id}', [StudentController::class, 'delete']);

// menampilkan detail data dengan method GET dan action SHOW
Route::get('/students/{id}', [StudentController::class, 'show']);


