<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
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

Route::get('/',  [AdminController::class, 'home'] , function () {
    return view('backpage.Home');
})->middleware(['auth', 'verified'])->name('Home');

Route::get('/admin',  [AdminController::class, 'index'] , function () {
    return view('backpage.admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::post('/students',  [AdminController::class, 'students'] , function () {
    return view('backpage.student');
})->middleware(['auth', 'verified'])->name('students');

Route::get('admin/{id}/edit',  [AdminController::class, 'edit'] , function () {
    return view('edit');
})->middleware(['auth', 'verified'])->name('edit');

Route::put('/admin/{id}',  [AdminController::class, 'update']);
Route::delete('/admin/{id}',  [AdminController::class, 'destroy']);

Route::get('/create',  [AdminController::class, 'create'] , function () {
    return view('backpage.create');
})->middleware(['auth', 'verified'])->name('create');

Route::get('/printdata', [AdminController::class, 'printDataStudentPDF']) -> name('PrintData');
Route::get('/printexcel', [AdminController::class, 'printDataStudentEXCEL']) -> name('Printexcel');
Route::get('/file-import',[AdminController::class,'importview'])->name('import-view');
Route::post('/import',[AdminController::class,'import'])->name('import');

require __DIR__.'/auth.php';
