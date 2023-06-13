<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/brands", [BrandController::class, 'index']);
Route::get("/brands/{slug}", [BrandController::class, 'show']);
Route::get("/products", [ProductController::class, 'index']);
Route::get("/products/{slug}", [ProductController::class, 'show']);
Route::get("/categories", [CategoryController::class, 'index']);
Route::get("/categories/{slug}", [CategoryController::class, 'show']);
