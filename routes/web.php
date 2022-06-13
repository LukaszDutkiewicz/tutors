<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;
use App\Http\Controllers\Subjects\SubjectsController;
use App\Http\Controllers\Subjects\SubjectController;
use App\Http\Controllers\ContactController;


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

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::group(
        ['prefix' => '/tutors/', 'as' => 'tutors.'],
        function () {
            Route::get('list', [TutorsController::class, 'list'])->name('list');
            Route::get('show/{id}', [TutorController::class, 'show'])->name('show');
            Route::post('destroy/{id}', [TutorController::class, 'destroy'])->name('destroy');
            Route::get('create', [TutorController::class, 'getCreateView'])->name('getCreateView');
            Route::post('create', [TutorController::class, 'create'])->name('create');
            Route::get('update/{id}', [TutorController::class, 'getUpdateView'])->name('getUpdateView');
            Route::post('update/{id}', [TutorController::class, 'update'])->name('update');
        }
    );
    Route::group(
        ['prefix' => '/subjects/', 'as' => 'subjects.'],
        function () {
            Route::get('list', [SubjectsController::class, 'list'])->name('list');
            Route::get('show/{id}', [SubjectController::class, 'show'])->name('show');
            Route::post('destroy/{id}', [SubjectController::class, 'destroy'])->name('destroy');
            Route::get('create', [SubjectController::class, 'getCreateView'])->name('getCreateView');
            Route::post('create', [SubjectController::class, 'create'])->name('create');
        }
    );
    Route::get('sendEmail', [MailController::class, 'sendEmail'])->name('sendEmail');

    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'save'])->name('contact.tutor');

    Route::get('{any}', [HomeController::class, 'homePage'])->where('any', '.*');
});
