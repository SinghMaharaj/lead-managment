<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// admin api routes start
 Route::prefix('admin')->group(function () {
        Route::post('/ajax-get-data/{type}', 'API\ApiController@ajax_get_data');
        Route::post('/ajax-get-data/{type}/{id}', 'API\ApiController@ajax_get_data');
 });