<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@dashboard')->name('home');

Route::group(['prefix'=>'caleg','middleware'=>'auth'],function(){
	Route::get('/','CalegController@index')->name('caleg');
	Route::view('add','caleg.add')->name('caleg.add');
	Route::post('store','CalegController@store')->name('caleg.store');
	Route::get('edit/{id}','CalegController@edit')->name('caleg.edit');
	Route::patch('edit/{id}','CalegController@update')->name('caleg.update');
});

Route::group(['prefix'=>'career','middleware'=>'auth'],function(){
	Route::get('/','CareerController@index')->name('career');
	Route::view('add','career.add')->name('career.add');
	Route::post('store','CareerController@store')->name('career.store');
	Route::get('delete/{id}','CareerController@delete')->name('career.delete');
	Route::get('edit/{id}','CareerController@edit')->name('career.edit');
	Route::patch('update/{id}','CareerController@update')->name('career.update');
});

Route::group(['prefix'=>'organization','middleware'=>'auth'],function(){
	Route::get('/','OrganizationController@index')->name('organization');
	Route::view('add','organization.add')->name('organization.add');
	Route::post('store','OrganizationController@store')->name('organization.store');
	Route::get('delete/{id}','OrganizationController@delete')->name('organization.delete');
	Route::get('edit/{id}','OrganizationController@edit')->name('organization.edit');
	Route::patch('update/{id}','OrganizationController@update')->name('organization.update');
});

Route::group(['prefix'=>'video','middleware'=>'auth'],function(){
	Route::get('/','VideoController@index')->name('video');
	Route::view('add','video.add')->name('video.add');
	Route::post('store','VideoController@store')->name('video.store');
	Route::get('delete/{id}','VideoController@delete')->name('video.delete');
	Route::get('edit/{id}','VideoController@edit')->name('video.edit');
	Route::get('preview/{id}','VideoController@preview')->name('video.preview');
	Route::patch('update/{id}','VideoController@update')->name('video.update');
});

Route::group(['prefix'=>'gallery','middleware'=>'auth'],function(){
	Route::get('/','GalleryController@index')->name('gallery');
	Route::view('add','gallery.add')->name('gallery.add');
	Route::post('store','GalleryController@store')->name('gallery.store');
	Route::get('delete/{id}','GalleryController@delete')->name('gallery.delete');
	Route::get('edit/{id}','GalleryController@edit')->name('gallery.edit');
	Route::get('preview/{id}','GalleryController@preview')->name('gallery.preview');
	Route::patch('update/{id}','GalleryController@update')->name('gallery.update');
});

Route::group(['prefix'=>'activities','middleware'=>'auth'],function(){
	Route::get('/','ActivitiesController@index')->name('activities');
	Route::view('add','activities.add')->name('activities.add');
	Route::post('store','ActivitiesController@store')->name('activities.store');
	Route::get('delete/{id}','ActivitiesController@delete')->name('activities.delete');
	Route::get('edit/{id}','ActivitiesController@edit')->name('activities.edit');
	Route::patch('update/{id}','ActivitiesController@update')->name('activities.update');
	Route::get('detail/{id}','ActivitiesController@detail')->name('activities.detail');
});

Route::group(['prefix'=>'message','middleware'=>'auth'],function(){
	Route::get('/','MessageController@index')->name('message');
	Route::get('detail/{id}','MessageController@detail')->name('message.detail');
});

Route::group(['prefix'=>'members','middleware'=>'auth'],function(){
	Route::get('/','MembersController@index')->name('members');
});

Route::group(['prefix'=>'banner','middleware'=>'auth'],function(){
	Route::get('/','BannerController@index')->name('banner');
	Route::view('add','banner.add')->name('banner.add');
	Route::post('store','BannerController@store')->name('banner.store');
	Route::get('delete/{id}','BannerController@delete')->name('banner.delete');
});


