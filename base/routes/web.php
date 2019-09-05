<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Dung\Core\app\Http\Controller'], function () {
    Route::get('/hello', 'DemoController@index');
});
