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

# 一覧画面
Route::get('student', [
    'uses' => 'StudentController@getIndex',
    'as' => 'student.list'
]);

# 新規登録画面

// Route::get('student/new', [
//     'uses' => 'StudentController@new_index',
//     'as' => 'student.new_index'
// ]);

Route::group(['prefix' => 'student'], function () {
    Route::get('new', 'StudentController@new_index'); //入力
    Route::patch('new','StudentController@new_confirm'); //確認
    Route::post('new', 'StudentController@new_finish'); //完了
});

# 編集画面
/*
Route::get('student/edit/{id}', [
    'uses' => 'StudentController@edit_index',
    'as' => 'student.edit_index'
]);
*/
Route::group(['prefix' => 'student'], function () {
    Route::get('edit/{id}/', 'StudentController@edit_index'); //編集
    Route::patch('edit/{id}/','StudentController@edit_confirm'); //確認
    Route::post('edit/{id}/', 'StudentController@edit_finish'); //完了
});

# 削除画面
Route::group(['prefix' => 'student'], function () {
    Route::post('delete/{id}/', 'StudentController@us_delete'); //削除
});
