<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoMoPaymentController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\CuaHangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [TrangChuController::class, 'index'])->name('trangchu');
Route::get('/cuahang', [CuaHangController::class, 'index'])->name('cuahang.index');
Route::get('/cuahang/{sanpham}', [CuaHangController::class, 'show'])->name('cuahang.show');
Route::get('/giohang', [GioHangController::class, 'index'])->name('giohang.index');
Route::post('/giohang', [GioHangController::class, 'store'])->name('giohang.store');
Route::delete('/giohang/{sanpham}', [GioHangController::class, 'destroy'])->name('giohang.destroy');
Route::get('empty', function() {
    Cart::destroy();
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::view('/thankyou', 'thankyou');


Route::post('/momo_payment', [MoMoPaymentController::class, 'momo_payment']);
