<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::Get('Test',function(){
    return 'Hello World';
});
Route::get('client', 'App\Http\Controllers\FrontController@apiclients')->name('client');
Route::get('activites', 'App\Http\Controllers\FrontController@apiusers')->name('Activite');
Route::get('users', 'App\Http\Controllers\FrontController@apiactivites')->name('Users');
