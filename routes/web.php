<?php

use App\Http\Controllers\ContactController;
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
    return view('index');
});
Route::resource('contacts', ContactController::class);
Route::get('contacts/{contact}/numbers/create', [ContactController::class, 'createNumber'])->name('contacts.createNumber');
Route::post('contacts/{contact}/numbers', [ContactController::class, 'storeNumber'])->name('contacts.storeNumber');
Route::get('contacts/{contact}/numbers/{number}/edit', [ContactController::class, 'editNumber'])->name('contacts.editNumber');
Route::put('contacts/{contact}/numbers/{number}', [ContactController::class, 'updateNumber'])->name('contacts.updateNumber');
Route::delete('contacts/{contact}/numbers/{number}', [ContactController::class, 'destroyNumber'])->name('contacts.destroyNumber');
