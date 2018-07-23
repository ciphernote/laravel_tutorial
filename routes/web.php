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

Route::get('/layouts/layout', function () {
    return view('layouts/layout');
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
Route::get('insert/', [
    'uses' => 'InsertDemoController@getIndex',
    'as' => 'insert.index'
]);

# 確認画面
Route::post('insert/confirm', [
    'uses' => 'InsertDemoController@confirm',
    'as' => 'insert.confirm'
]);

# 完了画面
Route::post('insert/finish', [
  'uses' => 'InsertDemoController@finish',
  'as' => 'insert.finish'
]);

# 入力画面
Route::get('mail/', [
    'uses' => 'MailDemoController@getIndex',
    'as' => 'mail.index'
]);

# 確認画面
Route::post('mail/confirm', [
    'uses' => 'MailDemoController@confirm',
    'as' => 'mail.confirm'
]);

# 完了画面
Route::post('mail/finish', [
  'uses' => 'MailDemoController@finish',
  'as' => 'mail.finish'
]);

# 入力画面
Route::get('uploader/', [
    'uses' => 'UploaderDemoController@getIndex',
    'as' => 'uploader.index'
]);

# 確認画面
Route::post('uploader/confirm', [
    'uses' => 'UploaderDemoController@confirm',
    'as' => 'uploader.confirm'
]);

# 完了画面
Route::post('uploader/finish', [
  'uses' => 'UploaderDemoController@finish',
  'as' => 'uploader.finish'
]);
