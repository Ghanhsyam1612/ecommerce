<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/products' ,[\App\Http\Controllers\Api\ProductApiController::class ,'allProducts']);

Route::get('/product/{product}' , [\App\Http\Controllers\Api\ProductApiController::class , 'singleProduct']);

Route::get('/product/{product}/review' , [\App\Http\Controllers\Api\ProductApiController::class , 'productWithReview']);

Route::get('/categories' ,[\App\Http\Controllers\Api\CategoryApiController::class ,'categories']);

Route::get('/category/{category}/product' ,[\App\Http\Controllers\Api\CategoryApiController::class ,'categoryWithProduct']);

