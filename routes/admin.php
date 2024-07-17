<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/links', [\App\Http\Controllers\Admin\LinkController::class, 'list'])->name('links.list');
    Route::get('/links/create', [\App\Http\Controllers\Admin\LinkController::class, 'createLinkForm'])->name('links.create');
    Route::get('/links/{link_id}/delete', [\App\Http\Controllers\Admin\LinkController::class, 'delete'])->name('links.delete');
    Route::post('/links/create', [\App\Http\Controllers\Admin\LinkController::class, 'storeNewLink'])->name('links.store');

});
