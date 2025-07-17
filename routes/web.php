<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TacGiaController;
use App\Http\Controllers\ThanhVienController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/author', action: [TacGiaController::class,'index'])->middleware(['auth', 'verified', 'check.admin'])->name('author');

Route::get('/author/{id}', [TacGiaController::class, 'show'])->middleware(['auth', 'verified', 'check.admin'])->name('author.detail');

Route::get('/member', action: [ThanhVienController::class,'index'])->middleware(['auth', 'verified', 'check.admin'])->name('member');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/change-language/{lang}', function ($lang) {
    $available = ['en', 'vi', 'ja']; // Các ngôn ngữ hỗ trợ
    if (in_array($lang, $available)) {
        Session::put('locale', $lang);
    }
    return back(); // Quay lại trang trước
})->name('change.language');


require __DIR__.'/auth.php';
