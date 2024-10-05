<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController; //
use App\Http\Controllers\CustomerController; //
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars', [CarController::class, 'index']);

// إضافة سيارة جديدة
Route::post('/cars', [CarController::class, 'store']);

// استرجاع سيارة معينة بناءً على الـ ID
Route::get('/cars/{id}', [CarController::class, 'show']);

// تحديث بيانات سيارة معينة
Route::put('/cars/{id}', [CarController::class, 'update']);

// حذف سيارة معينة
Route::delete('/cars/{id}', [CarController::class, 'destroy']);

// استرجاع جميع العملاء
Route::get('/customers', [CustomerController::class, 'index']);

// إضافة عميل جديد
Route::post('/customers', [CustomerController::class, 'store']);
