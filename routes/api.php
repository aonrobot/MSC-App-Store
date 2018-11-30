<?php

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
// /getEmployee/123
// /getEmployee/{id}

Route::prefix('employee')->group(function () {
    Route::middleware('api')->get('/get/{id}', 'EmployeeController@index');
    Route::middleware('api')->post('/delete', 'EmployeeController@index');
    Route::middleware('api')->post('/update', 'EmployeeController@index');
});

