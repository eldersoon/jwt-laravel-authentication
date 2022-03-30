<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::group([
    'middleware' => 'api',
], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

    // ROLES & PERMISSIONS
    Route::group(['middleware' => ['apiJwt']], function() {
        Route::resource('products', ProductController::class);

        Route::post('role/create', [RoleController::class, 'store']);
        Route::post('role/update',[ RoleController::class, 'update']);

        Route::get('users', [UserController::class, 'index']);
        Route::post('user/create', [UserController::class, 'store']);
        Route::post ('user/update', [UserController::class, 'update']);
    });

});
