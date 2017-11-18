<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/Losts','LostController');
Route::group(['prefix'=>'lost'],function () {
    Route::apiResource('/{lost}/reviews', 'ReviewController');

});