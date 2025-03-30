<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoMoPaymentController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\CuaHangController;
use App\Http\Controllers\GioHangController;

// Route::view('/', 'trangchu');

Route::get('/', [TrangChuController::class, 'index'])->name('trangchu');
Route::get('/cuahang', [CuaHangController::class, 'index'])->name('cuahang.index');
Route::get('/cuahang/{sanpham}', [CuaHangController::class, 'show'])->name('cuahang.show');
Route::get('/giohang', [GioHangController::class, 'index'])->name('giohang.index');
Route::post('/giohang', [GioHangController::class, 'store'])->name('giohang.store');
Route::delete('/giohang/{sanpham}', [GioHangController::class, 'destroy'])->name('giohang.destroy');
Route::get('empty', function() {
    Cart::destroy();
});

Route::view('/sanpham', 'sanpham');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');

Route::post('/momo_payment', [MoMoPaymentController::class, 'momo_payment']);
