<?php

use App\Http\Controllers\ContactBookController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ContactBookController::class, 'index'])->name('index');

Route::get('/contacts', [ContactBookController::class, 'indexContacts'])->name('contacts');
Route::get('/contacts/create', [ContactBookController::class, 'create'])->name('contacts.create');


Route::post('/contacts/create/store', [ContactBookController::class, 'store'])->name('contacts.store');

Route::put('/contacts/create/{id}', [ContactBookController::class, 'update'])->name('contacts.update');

Route::get('/contacts/{id}', [ContactBookController::class, 'edit'])->name('contacts.edit');

Route::delete('/contacts/delete/{id}', [ContactBookController::class, 'destroy'])->name('contacts.delete');