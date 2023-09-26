<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
});

=======
Route::get('/', [DashboardController::class, 'index']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'detail']);
Route::get('/cariBuku', [BookController::class, 'cariBuku']);

Route::get('/registration', [AuthController::class, 'registration']);
Route::get('/login', [AuthController::class, 'login']);
>>>>>>> 985bc4a582decf67df41a9c37e078a6d38d813f8

