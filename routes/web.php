<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_employee_controller;

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

Route::get('/', [_employee_controller::class, 'home'])->name('home');

Route::get('/create', [_employee_controller::class, 'create'])->name('create');
Route::post('/', [_employee_controller::class, 'add'])->name('add');

Route::get('/{emp}/update', [_employee_controller::class, 'update'])->name('update');
Route::post('/{emp}/push_update', [_employee_controller::class, 'push_update'])->name('push_update'); 

Route::delete('/{emp}/delete', [_employee_controller::class, 'delete'])->name('delete'); 