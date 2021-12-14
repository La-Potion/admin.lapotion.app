<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::group(['prefix' => '/'], function () {
    Voyager::routes();
});