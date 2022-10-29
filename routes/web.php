<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::view('permissoes','adm.permissions.index')->middleware(['auth'])->name('permissoes');
Route::view('usuarios','adm.users.index')->middleware(['auth'])->name('usuarios');
Route::view('cofrinho','projects.piggy-bank')->name('cofrinho');

require __DIR__.'/auth.php';
