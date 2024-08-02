<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TâcheController;

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

Route::get('/task.index', [TâcheController::class, 'index'])->name("todo.index");

Route::get('/task.create', [TâcheController::class,'create'])->name("todo.create");

// route edit todo list 
Route::get('/task.edit/{id}', [TâcheController::class, 'edit'])->name("todo.edit");

Route::get('/task.show/{id}', [TâcheController::class, 'show'])->name("todo.show");

// route update todo list
Route::post('task.update', [TâcheController::class, 'update'])->name('todo.update');

// route create todo list
Route::post('/task.create', [TâcheController::class, 'store'])->name("todo.store");

// route delete todo list
Route::get('delete_task/{id}', [TâcheController::class, 'destroy'])->name('todo.destroy');

Route::get('/search', [TâcheController::class,'search'])->name('todo.search');

// Route::get('task/categorie/{name}', [TâcheController::class, 'byCodeCategorie'])->name('todo.categorie');
        