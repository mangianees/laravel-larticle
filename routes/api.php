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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list of articles
Route::get('articles','ArticleController@index');

//list of articles
Route::get('article/{id}','ArticleController@show');

//New Article

//list of articles
Route::post('articles','ArticleController@store');

//update
//list of articles
Route::put('articles','ArticleController@store');

//delete
Route::delete('articles','ArticleController@destory');