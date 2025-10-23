<?php

use App\Http\Controllers\BoutiqueController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BoutiqueController::class, 'index'])->name('index');
Route::get('/detail/{id}', [BoutiqueController::class, 'show'])->name('detail');