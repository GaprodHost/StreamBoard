<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/links', [\App\Http\Controllers\Admin\LinkController::class, 'list'])->name('links.list');

});
