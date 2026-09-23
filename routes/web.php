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

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/list', [App\Http\Controllers\ContactController::class, 'getContacts'])->name('contact.getContacts');
Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts/edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
Route::put('/contacts/update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
Route::get('/contacts/delete/{id}', [App\Http\Controllers\ContactController::class, 'delete'])->name('contact.delete');
Route::get('/contacts/search', [App\Http\Controllers\ContactController::class, 'search'])->name('contact.search');