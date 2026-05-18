<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\dashboard\postController;
use App\Http\Controllers\members\membersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/register',function(){
    return view('auth.register');
});



Route::get('/', function () {
    return view('auth.login');
});



Route::get('/registration', function () {
    return view('register');
})->name('registration.index');

Route::post('/registration',[membersController::class,'store'
])->name('registration.store');




Route::get('/dashboard', [postController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('dashboard')->group(function () {

    Route::get('/create',function(){
        return view('dashboard.create');
    })->name('dashboard.create');
    Route::post('/create',[postController::class,'create'])->name('dashboard.create.post');
});


Route::get("/members",[membersController::class,'index'
])->middleware(['auth', 'verified'])->name('members.index');

Route::get("/meeting",function() {
    return view('meeting.app');
})->middleware(['auth', 'verified'])->name('meeting');
Route::get('/meeting/create',[postController::class,'create'
])->middleware(['auth', 'role:admin'])->name('meeting.create');

Route::get("/admin",[adminController::class,'index'
])->middleware(['auth', 'role:admin'])->name('admin.index');

Route::post("/admin/update",[adminController::class,'update'
])->middleware(['auth', 'role:admin'])->name('admin.update');

Route::delete("/admin/delete/{id}",[adminController::class,'destroy'
])->middleware(['auth', 'role:admin'])->name('admin.delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
