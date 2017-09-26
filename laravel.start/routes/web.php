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
    return view('welcome');
});

Route::get('KhoaHoc',function(){
	return "Xin chao cac ban";
});

Route::get('product/mayin',function(){
	return "<h1>Ban den voi the goi may in </h1>";
});

// Truyen tham so
Route::get('Hoten/{ten}', function($ten) {
    echo "Ten cua ban la :".$ten;
});

Route::get('ten/{ngay}', function($ngay) {
    echo "Ten cua ban la :".$ngay;
})->where(['ngay'=>'[a-z]{3}']);

Route::get('Route1',['as'=>'Myroute',function(){
	echo "Xin chao cac ban";
}]);

Route::get('Route2',function(){
	echo "Xin chao cac ban Route 2";
})->name("Myroute2");

Route::get('goiten',function(){
	return redirect()->route('Myroute2');
});

// Create Group Route
Route::group(['prefix' => 'admin'], function() {
    Route::get('users1', function() {
        echo "xin chao users1";
    });

    Route::get('users2/{name}', function($name) {
        echo "xin chao users2=>  ".$name;
    });

    Route::get('users3', function() {
        echo "xin chao users3";
    });
});

// Goi Controller

Route::get('goicontroller','MyController@xinchao');
Route::get('thamso/{ten}','MyController@khoahoc');

// URL

Route::get('Myrequest','MyController@GetURL');

// Goi gui nhan du lieu
Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);

// use cokkie

Route::get('setCookie', 'MyController@setCookie');
Route::get('getCookie', 'MyController@getCookie');
