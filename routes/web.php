<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;


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

Route::group(
    ['prefix' => '/tutors/', 'as' => 'tutors.'],
    function () {
        Route::get('list', [TutorsController::class, 'list'])->name('list');
        Route::get('show/{id}', [TutorController::class, 'show'])->name('show');
        Route::get('create', [TutorController::class, 'getCreateView'])->name('getCreateView');
        Route::post('create', [TutorController::class, 'create'])->name('create');
    }
);

Route::get('/{any}', [HomeController::class, 'homePage'])->where('any', '.*');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
