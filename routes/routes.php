<?php

use Illuminate\Support\Facades\Route;
use OZiTAG\Tager\Backend\Panel\Controllers\PublicController;

Route::group(['prefix' => 'tager/panel'], function () {
    Route::get('/page', [PublicController::class, 'page']);
});
