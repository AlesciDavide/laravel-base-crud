<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::get('/', [AnimalController::Class, 'index'])->name('pages.index');
Route::post('/', [AnimalController::Class, 'store'])->name('pages.store');

Route::get('/deleted', [AnimalController::class, 'deletedIndex'])->name('pages.deleted.index');
Route::patch('/deleted/{animal}/restore', [AnimalController::class, 'restore'])->name('pages.restore');
Route::delete('/deleted/{animal}/delete', [AnimalController::class, 'delete'])->name('pages.permanent_delete');


Route::get('/create', [AnimalController::Class, 'create'])->name('pages.create');

Route::get('/show/{animal}/edit', [AnimalController::Class, 'edit'])->name('pages.edit');
Route::get('/show/{animal}', [AnimalController::Class, 'show'])->name('pages.show');
Route::put('/show/{animal}', [AnimalController::Class, 'update'])->name('pages.update');
Route::delete('/show/{animal}', [AnimalController::Class, 'destroy'])->name('pages.destroy');

/* Route::resource('/', AnimalController::class); */
