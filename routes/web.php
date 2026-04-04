<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directory', function () {
    return view('directory');
});

Route::get('/socials', function () {
    return view('socials');
});

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/admissions', function () {
    return view('admissions');
});