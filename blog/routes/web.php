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
Route::get('/{year}/{month}/{day}', function($year,$month,$day){
	return strftime("%A",strtotime($year.'-'.$month.'-'.$day));
})->where(['year'=>'[0-9]{4}','month'=>'[0-9]{2}','day'=>'[0-9]{2}']);
