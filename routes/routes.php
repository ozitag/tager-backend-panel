<?php

use Illuminate\Support\Facades\Route;
use OZiTAG\Tager\Backend\Panel\Controllers\PublicController;

Route::group(['prefix' => 'tager/panel', 'middleware' => ['passport:administrators', 'auth:api']], function () {
    Route::get('/info', [PublicController::class, 'info']);
    Route::get('/page', [PublicController::class, 'page']);
});