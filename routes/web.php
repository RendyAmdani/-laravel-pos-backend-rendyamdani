<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        $data['user'] = \App\Models\User::count();
        $data['snack'] = \App\Models\Product::where('category', 'snack')->count();
        $data['drink'] = \App\Models\Product::where('category', 'drink')->count();
        $data['food'] = \App\Models\Product::where('category', 'food')->count();
        return view('pages.dashboard', compact('data'));
    })->name('home');

    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
});
