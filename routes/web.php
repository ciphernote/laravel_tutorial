<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/users/list', function () {
    return view('users/list');
});

# 入力画面
Route::get('request/', [
    'uses' => 'RequDemoController@getIndex',
    'as' => 'request.index'
]);

# 確認画面
Route::post('request/confirm', [
    'uses' => 'RequDemoController@confirm',
    'as' => 'request.confirm'
]);

# 入力画面
Route::get('validation/', [
    'uses' => 'ValiDemoController@getIndex',
    'as' => 'validation.index'
]);

# 確認画面
Route::post('validation/confirm', [
    'uses' => 'ValiDemoController@confirm',
    'as' => 'validation.confirm'
]);
