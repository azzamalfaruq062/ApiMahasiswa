<?php

use App\Http\Controllers\Api\MahasiswaController;
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

// Jika ingin mudah menggunakan route resource, tanpa deklarasi satu persatu yg ada di controller api
// Route::resource('mahasiswa', MahasiswaController::class);

Route::get('mahasiswa', [MahasiswaController::class, 'index']);//route untuk menampilkan semua data mahasiswa
Route::get('mahasiswa/{id}', [MahasiswaController::class, 'show']);//route untuk menampilkan salahsatu data mahasiswa
Route::post('mahasiswa/add', [MahasiswaController::class, 'store']);//route untuk menambah data mahasiswa
Route::put('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);//route untuk update data mahasiswa
Route::get('mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);//route untuk delete data mahasiswa
