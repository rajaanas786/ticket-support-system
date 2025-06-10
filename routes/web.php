<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/tickets', [AdminController::class, 'index']);
    Route::get('/admin/tickets/{type}/{id}', [AdminController::class, 'show']);
    Route::post('/admin/tickets/{type}/{id}/note', [AdminController::class, 'note']);

});

require __DIR__ . '/auth.php';
