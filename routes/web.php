<?php

use App\Http\Controllers\QuestionMailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/about_me','about_me')->name('about_me');
Route::view('/projects','projects')->name('projects');
Route::view('/cv','cv')->name('cv');
//Route::view('/extra','extra')->name('extra');

Route::post('/contact', [QuestionMailController::class, 'send'])->name('contact.send');
