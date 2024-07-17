<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    // Links
    Route::get('/links', [\App\Http\Controllers\Admin\LinkController::class, 'list'])->name('links.list');
    Route::get('/links/create', [\App\Http\Controllers\Admin\LinkController::class, 'createLinkForm'])->name('links.create');
    Route::get('/links/{link_id}/delete', [\App\Http\Controllers\Admin\LinkController::class, 'delete'])->name('links.delete');
    Route::post('/links/create', [\App\Http\Controllers\Admin\LinkController::class, 'storeNewLink'])->name('links.store');

    // Settings
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'list'])->name('settings.list');
    Route::get('/settings/{setting_id}/update', [\App\Http\Controllers\Admin\SettingController::class, 'editForm'])->name('settings.edit');
    Route::post('/settings/{setting_id}/update', [\App\Http\Controllers\Admin\SettingController::class, 'storeUpdate'])->name('settings.store');

    // Update
    Route::get('/update', [UpdateController::class, 'show'])->name('update.show');
    Route::post('/update', [UpdateController::class, 'update'])->name('update.perform');
});
