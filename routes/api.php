<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;

Route::get('/test', function () {
    return 'Test route is working!';
});

Route::post('/submit', [SubmissionController::class, 'submit']);
