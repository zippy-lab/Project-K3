<?php

use App\Http\Controllers\K3Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [K3Controller::class, 'index'])->name('k3.home');
Route::post('/k3/quiz/submit', [K3Controller::class, 'submitQuiz'])->name('k3.quiz.submit');
