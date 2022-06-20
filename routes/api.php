<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tutors\ApiTutorsController;
use App\Http\Controllers\Tutors\ApiTutorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(
    ['prefix' => '/tutors/', 'as' => 'tutors.'],
    function () {

        Route::get('list', [ApiTutorsController::class, 'list'])->name('list');
        Route::get('show/{id}', [ApiTutorController::class, 'show'])->name('show');
        Route::post('create', [ApiTutorController::class, 'create'])->name('create');
        Route::put('update/{id}', [ApiTutorController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [ApiTutorController::class, 'destroy'])->name('destroy');
    }
);
