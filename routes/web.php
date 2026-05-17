<?php

use App\Http\Controllers\dashboard\postController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/register',function(){
    return ('<h1>Please Contact the Club Leaders To Register</h1>>');
});



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/registration', function () {
    return view('register');
});

Route::get('/dashboard', [postController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('dashboard')->group(function () {

    Route::get('/create',function(){
        return view('dashboard.create');
    })->name('dashboard.create');
    Route::post('/create',[postController::class,'create'])->name('dashboard.create.post');
});


Route::get("/members",[\App\Http\Controllers\members\membersController::class,'index'
])->middleware(['auth', 'verified'])->name('members.index');

Route::get("/meeting",function() {
    return view('meeting');
})->middleware(['auth', 'verified'])->name('meeting');

Route::get("/admin",function() {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
