<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return view('index');
});

Route::get('projects', [ProjectController::class, 'index']);
Route::get('resume', [ResumeController::class, 'index']);
Route::get('/test-env', function () {
    return env('GITHUB_USERNAME');
});