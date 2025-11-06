<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home'); // index
    Route::get('/download', 'download')->name('download');
});
