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
    return '!!!';
});

Route::get('pages/all','pages@showAll');
Route::get('pages/show/{id}','TestController@showOne')->where('id','[0-9]+');
Route::get('pages/{value}/{number}','TestController@showFild')->where(['value'=>'name|surname|salary','number'=>'[0-9]+']);
Route::get('test/{id}','TestController@show');
Route::get('blade','TestController@bladetest');
Route::get('post/{id}','Post@showOne');
Route::get('posts','Post@showAll');
Route::get('/product/{category_id}/{product_id}','Product@showProduct');
Route::get('/product/{category_id}','Product@showCategory');
Route::get('/categories','Product@showCategoryList');
Route::match(['get','post'],'/forms','TestController@formResult');
Route::post('/forms/result','TestController@formResult');
Route::get('/user/{id}/{age}','TestController@userId');
Route::match(['get','post'],'/tests/method','TestController@testMethod');
Route::get('/redirect','TestController@redirect');
Route::get('/redirect/show/{param1}/{param2}','TestController@toRedirect')->name('show');
Route::get('flash','TestController@flash');
Route::get('flash/show','TestController@flashShow')->name('flashShowName');

Route::get('test/sum/{num1}/{num2}','test@sum')->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
