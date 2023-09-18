<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student\StudentController;
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
Route::get('/addlist', [StudentController::class, 'add'])->name('add');
Route::get('/studentlist',[StudentController::class,'list'])->name('list');
Route::post('/storedata',[StudentController::class,'store'])->name('store');
Route::patch('/update/{id}',[StudentController::class,'update'])->name('std.update');
Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
