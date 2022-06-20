<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tutors\ApiTutorsController;
use App\Http\Controllers\Tutors\ApiTutorController;

Route::get('list', [ApiTutorsController::class, 'list'])->name('list');
Route::get('show/{id}', [ApiTutorController::class, 'show'])->name('show');
Route::post('create', [ApiTutorController::class, 'create'])->name('create');
Route::put('update/{id}', [ApiTutorController::class, 'update'])->name('update');
Route::delete('destroy/{id}', [ApiTutorController::class, 'destroy'])->name('destroy');
