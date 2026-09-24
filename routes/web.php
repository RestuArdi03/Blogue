<?php

use App\Http\Controllers\ProfileController;
Use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.beranda', [
        'title' => 'Home',
    ]);
})->name('frontend.home');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/about', function () {
    return view('frontend.about', [
        'title' => 'About',
    ]);
})->name('frontend.about');
Route::get('/contact', function () {
    return view('frontend.contact', [
        'title' => 'Contact',
    ]);
})->name('frontend.contact');
    
Route::get('/dashboard', function () {
    return view('backend.dashboard', [
        'title' => 'Dashboard',
    ]);
})->middleware(['auth', 'verified'])->name('backend.dashboard');
Route::get('/article', function () {
    return view('backend.article', [
        'title' => 'article',
    ]);
})->middleware(['auth', 'verified'])->name('backend.article');
Route::get('/inbox', function () {
    return view('backend.inbox', [
        'title' => 'Inbox',
    ]);
})->middleware(['auth', 'verified'])->name('backend.inbox');
Route::get('/users', function () {
    return view('backend.users', [
        'title' => 'Users',
    ]);
})->middleware(['auth', 'verified'])->name('backend.users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
