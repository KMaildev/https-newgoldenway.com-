<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CanditateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JapaneseLanguageController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\OverseasJobsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);
Route::resource('japanese_language', JapaneseLanguageController::class);
Route::get('training', [JapaneseLanguageController::class, 'training'])->name('training');
Route::resource('overseas_jobs', OverseasJobsController::class);
Route::get('canditate_ajax/{id}', [CanditateController::class, 'canditateAjax'])->name('canditate_ajax');
Route::resource('canditate', CanditateController::class);
Route::get('set_eng', [LangController::class, 'lang_eng'])->name('set_eng');
Route::get('set_jp', [LangController::class, 'lang_jp'])->name('set_jp');

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('canditate_show/{id}', [CanditateController::class, 'show'])->name('canditate_show');
});
