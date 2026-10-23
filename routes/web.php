<?php
use App\Http\Controllers\TechProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TechProductController::class, 'home'])->name('home');

Route::get('/products', [TechProductController::class, 'index'])->name('products');
Route::get('/product/{id}', [TechProductController::class, 'show'])->name('product.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');
?>