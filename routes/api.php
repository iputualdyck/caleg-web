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

Route::group(['prefix'=>'activities'],function(){
	Route::get('data','ActivitiesController@data');
});

Route::group(['prefix'=>'career'],function(){
	Route::get('data','CareerController@data');
});

Route::group(['prefix'=>'organization'],function(){
	Route::get('data','OrganizationController@data');
});

Route::group(['prefix'=>'video'],function(){
	Route::get('data','VideoController@data');
});

Route::group(['prefix'=>'video'],function(){
	Route::get('data','VideoController@data');
});

Route::group(['prefix'=>'gallery'],function(){
	Route::get('data','GalleryController@data');
});

Route::group(['prefix'=>'message'],function(){
	Route::post('add','MessageController@add');
});

Route::group(['prefix'=>'caleg'],function(){
	Route::get('data','CalegController@data');
});

Route::group(['prefix'=>'banner'],function(){
	Route::get('data','BannerController@data');
});

Route::group(['prefix'=>'member'],function(){
	Route::post('login','MembersController@login');
});

