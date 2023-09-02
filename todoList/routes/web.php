<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Models\todo;
use Illuminate\Http\Request;

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

 Route::get('/todo',[todoController::class,'display'])->name('todos.index');
 Route::post('/todo', [todoController::class, 'store'])->name('todos.store');
 Route::delete('/todo/{task}',[todoController::class,'destroy'])->name('todos.destroy');
 Route::get('/todo/{task}/edit',[todoController::class,'edit'])->name('todos.edit');
 Route::put('/todo/{task}',[todoController::class,'update'])->name('todos.update');


