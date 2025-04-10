<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {

    Route::apiResources([
        'users'         => UsersController::class,
        'roles'         => RolesController::class,
        'permissions'   => PermissionsController::class,
        'posts'         => PostsController::class
    ]);

    Route::put('user/updatepassword/{id}', [UsersController::class, 'updatePassword']);
    Route::put('user/updateavatar/{id}', [UsersController::class, 'updateAvatar']);
    Route::get('option/{key}', [OptionsController::class, 'get']);
    Route::post('setconfig', [ConfigController::class, 'setconfig']);
});

Route::get('config', [ConfigController::class, 'index']);
