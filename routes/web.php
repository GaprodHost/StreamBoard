<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Developpement Route

Route::middleware([\App\Http\Middleware\CheckEnvLocal::class])->group(function(){
    Route::get('/generate-user', function(){
        $user = new \App\Models\User();
        $user->name = "Local";
        $user->email = "test@local.dev";
        $user->password = \Illuminate\Support\Facades\Hash::make('local');
        $user->save();
        return json_encode($user);
    });
});
