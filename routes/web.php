<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// صفحه اصلی
Route::get('/', function () {
  return view('frontend.pages.home');
})->name('home');

// صفحات استاتیک
Route::get('/about', function () {
  return view('frontend.pages.about');
})->name('about');

Route::get('/contact', function () {
  return view('frontend.pages.contact');
})->name('contact');

Route::get('/services', function () {
  return view('frontend.pages.services');
})->name('services');

// وبلاگ
Route::prefix('blog')->name('blog.')->group(function () {
  Route::get('/', function () {
    return view('blog.pages.index');
  })->name('index');

  Route::get('/{slug}', function ($slug) {
    return view('blog.pages.show', compact('slug'));
  })->name('show');
});

// رزومه کارکنان
Route::prefix('resume')->name('resume.')->group(function () {
  Route::get('/', function () {
    return view('resume.pages.index');
  })->name('index');

  Route::get('/{id}', function ($id) {
    return view('resume.pages.show', compact('id'));
  })->name('show');
});

// احراز هویت
require __DIR__.'/auth.php';

// Route سازگاری برای Breeze
Route::get('/dashboard', function () {
  return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Panel
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
  Route::get('/', function () {
    return view('admin.dashboard.index');
  })->name('dashboard');

  Route::get('/users', function () {
    return view('admin.users.index');
  })->name('users.index');

  Route::get('/settings', function () {
    return view('admin.settings.general');
  })->name('settings');
});
