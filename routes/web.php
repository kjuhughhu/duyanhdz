<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::METHOD(path_string,HANDLE_FUNCTION);
// METHOD : post get put delete ....  CRUD : edit du lieu
//Route::get("/xin-chao",function (){
//        echo "chao tat ca moi nguoi";
//    }
//);
///* Lưu ý
// * chạy url trên trình duyệt -> method GET
// */
//Route::get("/danh-sach-lop-hoc",function (){
//    $arr = [];
//});
//
//Route::get("/danh-sach","WebController@listStudent");
Route::get("/","WebController@home");
Route::get('/shop',"WebController@shop");
Route::get('/shop_single',"WebController@shop_single");


