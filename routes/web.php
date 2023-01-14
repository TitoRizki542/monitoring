<?php

use App\Http\Controllers\RekapController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StuntingControlle☻r;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Dashboard
route::get('/', function(){
    return view('welcome');
});
route::get('/dashboard', function(){
    return view('welcome');
});
route::get('/user', function(){
    return view('user.index');
});
route::get('/grafik', function(){
    return view('grafik.index');
});
route::get('/stunting', function(){
    return view('stunting.index');
});
// =============================================================== //
    // Data User
// =============================================================== //
// index User
Route::get('/user', [UserController::class, 'index']);
// Create User
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'ceateProcess']);

// =============================================================== //
    // Data KADER
// =============================================================== //
// index Kader
Route::get('/kader', [AdminController::class, 'index']);
// Create Kader
Route::get('/kader/create', [AdminController::class, 'create']);
Route::post('/kader/{id}', [AdminController::class, 'createProcess']);
// Show Data Kader
Route::get('/show/{id}', [AdminController::class, 'show']);
// Detail Data Kader
Route::get('/detail/{id}', [AdminController::class, 'detail']);
// Update Kader
route::put('/edit/{id)', [AdminController::class, 'edit']);
route::post('/update/{id}', [AdminController::class, 'update']);
// delete Kader
route::get('/delete/{id}', [AdminController::class, 'delete']);

// =============================================================== //
    // Data ORANG TUA
// =============================================================== //
// index Orang Tua
Route::get('/orangtua', [OrangtuaController::class, 'index']);
// Create Orang Tua
Route::get('/orangtua/create', [OrangtuaController::class, 'create']);
Route::post('/orangtua', [OrangtuaController::class, 'createProcess']);
//Show Data  Orang Tua
Route::get('/showorangtua/{id}', [OrangtuaController::class, 'show']);
// Detail Data  Orang Tua
Route::get('/detailorangtua/{id}', [OrangtuaController::class, 'detail']);
// Update  Orang Tua
route::put('/editorangtua/{id)', [OrangtuaController::class, 'edit']);
route::post('/updateorangtua/{id}', [OrangtuaController::class, 'update']);
// delete  Orang Tua
route::get('/deleteorangtua/{id}', [OrangtuaController::class, 'delete']);

// =============================================================== //
    // Data Anak
// =============================================================== //
// index Anak
Route::get('/anak', [AnakController::class, 'index']);
// Create Anak
Route::get('/anak/create', [AnakController::class, 'create']);
Route::post('/anak', [AnakController::class, 'createProcess']);
//Show Data Anak
Route::get('/showanak/{id}', [AnakController::class, 'show']);
// Detail Data Anak
Route::get('/detailanak/{id}', [AnakController::class, 'detail']);
// Update Anak
route::put('/editanak/{id)', [AnakController::class, 'edit']);
route::post('/updateanak/{id}', [AnakController::class, 'update']);
// delete Anak
route::get('/deleteanak/{id}', [AnakController::class, 'delete']);
// =============================================================== //
  // rekap Data
// =============================================================== //
Route::get('/rekap', [RekapController::class, 'index']);
// Create Anak
Route::get('/rekap/create', [RekapController::class, 'create']);
Route::post('/rekap', [RekapController::class, 'createProcess']);
//Show Data Anak
Route::get('/showrekap/{id}', [RekapController::class, 'show']);
// Detail Data Anak
Route::get('/detailrekap/{id}', [RekapController::class, 'detail']);
// Update Anak
route::put('/editrekap/{id)', [RekapController::class, 'edit']);
route::post('/updaterekap/{id}', [RekapController::class, 'update']);
// delete Anak
route::get('/deleterekap/{id}', [RekapController::class, 'delete']);
