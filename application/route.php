<?php
use think\Route;

/**************************************  admin route **************************************/

// 公用路由
Route::group('common',function (){
    Route::post('uploadFile','controllers/common/uploadFile');
});

// 首页
Route::group('home',function (){
    Route::get('index','controllers/home/index');
    Route::get('welcome','controllers/home/welcome');
});

// 用户
Route::group('member',function (){
    Route::get('list','controllers/member/getMemberList');
});

// 文章
Route::group('article',function (){
    Route::get('list','controllers/article/getArticleList');
    Route::get('addView','controllers/article/getAddArticleView');
    Route::get('info','controllers/article/getArticleInfoAction');
    Route::post('create','controllers/article/createArticleAction');
});

