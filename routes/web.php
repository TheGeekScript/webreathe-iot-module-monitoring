<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleDataController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('modules', ModuleController::class);
Route::resource('module-data', ModuleDataController::class);

Route::get('/modules/create', [ModuleController::class, 'create'])->name('modules.create');
Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
