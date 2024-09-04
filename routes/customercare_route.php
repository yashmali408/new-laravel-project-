<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\ChatController;

use App\Http\Middleware\AdminAuth;


Route::prefix('customercare')->middleware(AdminAuth::class)->group(function () { // /admin/login
    Route::get('/dashboard', [AuthController::class,'cc_dashboard'])->name('customercare_dashboard');
    Route::get('/chat', [ChatController::class,'cc_chat'])->name('cc_chat');
});


?>