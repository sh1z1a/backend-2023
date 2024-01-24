<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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

// sanctum itu buat autentifikasi jadi memastikan kalau data kita aman
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Start Route for animals
// method get
Route::get('/animals', [AnimalController::class, 'index']);

// method post
Route::post('/animals', [AnimalController::class, 'store']);

// method put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

// method delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);
// end route

// Start Route for students
// method get
Route::get('/students', [StudentController::class, 'index']);

// method post
Route::post('/students', [StudentController::class, 'store']);

// method put
Route::put('/students/{id}', [StudentController::class, 'update']);

// method delete
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
// end route

/**
 * Nama     : Hasna Azizah 
 * Kelas    : SE03 / TI02
 * NIM      : 0110222235
 */
