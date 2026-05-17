<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/register',function(){
    return ('<h1>Please Contact the Club Leaders To Register</h1>>');
});



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get("/members",function() {
    return view('members');
})->middleware(['auth', 'verified'])->name('members');

Route::get("/meeting",function() {
    return view('meeting');
})->middleware(['auth', 'verified'])->name('meeting');

Route::get("/about",function() {
    return view('about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
