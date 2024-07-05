<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home')->name('home');

Route::get('contact', static function () {
    return view('contact');
});
Route::get('blog-grid-sidebar', static function () {
    return view('blog-grid-sidebar');
});
Route::get('blog-single', static function () {
    return view('blog-single');
});
Route::get('blog-single-sidebar', static function () {
    return view('blog-single-sidebar');
});

Route::get('dashboard', static function () {
    return view('old.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
