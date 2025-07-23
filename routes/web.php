<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/*
Route::middleware(['auth'])->group(function () {
    Route::resource('programs', ProgramController::class);
    Route::resource('advices',  AdviceController::class);
    Route::resource('news',     NewsController::class);
});

*/


// Javne rute samo za pregled:
Route::resource('programs', ProgramController::class)
     ->only(['index','show']);

Route::resource('advices', AdviceController::class)
     ->only(['index','show']);

Route::resource('news', NewsController::class)
     ->only(['index','show']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::resource('admin/widgets', \App\Http\Controllers\Admin\WidgetController::class)->middleware('auth');



require __DIR__.'/auth.php';



