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

Route::get('/activity', 'APIController@activity');
Route::get('/leads', 'APIController@leads');
Route::get('/glamping', 'APIController@glamping');
Route::get('/leadsBoulevard', 'APIController@leadsBoulevard');
Route::get('/sign-ups', 'APIController@sign_ups');

