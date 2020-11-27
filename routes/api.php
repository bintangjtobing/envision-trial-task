<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

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

Route::get('chemicals', 'DashboardController@getChemicals');
Route::post('add-chemical-list', 'DashboardController@addChemical');
Route::get('users', 'DashboardController@users');

Route::middleware('auth:api')->group(function () {
    Route::get('check-file', 'DashboardController@checkFile');
    Route::get('chemicaldatas', 'DashboardController@getChemicalDatas');
    Route::post('chemicaldatas', 'DashboardController@addChemicalData');
});
