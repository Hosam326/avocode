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

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::post('/login', 'AdminController@login')->name('admin.login');

    Route::get('/home', function () {
        return view('layout');
    })->name('home');

    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/slider/addSlider', 'SliderController@create');
    Route::post('/slider/addSlider', 'SliderController@store')->name('slider.store');
    Route::get('/slider/viewSlider', 'SliderController@show')->name('slider.index');
    Route::delete('/slider/{id}/delete', 'SliderController@destroy')->name('slider.delete');
    Route::get('/slider/{id}/edit', 'SliderController@edit')->name('slider.edit');
    Route::put('/slider/{id}/update', 'SliderController@update')->name('slider.update');


    Route::get('/tags/addTag', 'TagController@create');
    Route::post('/tags/addTag', 'TagController@store')->name('tags.store');
    Route::get('/tags/viewTag', 'TagController@show')->name('tags.show');
    Route::get('/tags/{id}/edit', 'TagController@edit')->name('tags.edit');
    Route::put('/tags/{id}/update', 'TagController@update')->name('tags.update');
    Route::delete('/tags/{id}/delete', 'TagController@destroy')->name('tags.delete');

    Route::get('/service/addService', 'ServiceController@create');
    Route::post('/service/addService', 'ServiceController@store')->name('service.store');
    Route::get('/service/viewService', 'ServiceController@show')->name('service.show');
    Route::delete('/service/{id}/delete', 'ServiceController@destroy')->name('service.delete');
    Route::get('/service/{id}/edit', 'ServiceController@edit')->name('edit.service');
    Route::put('/service/{id}/update', 'ServiceController@update')->name('service.update');

//    Route::resource('services', 'ServiceController');


    Route::get('/service/subService', 'SubServiceController@create');
    Route::post('/service/subService', 'SubServiceController@store')->name('subService.store');
    Route::get('/service/viewSubService', 'SubServiceController@show')->name('subService.show');
    Route::delete('/service/{id}/delete', 'SubServiceController@destroy')->name('subService.delete');
    Route::get('/service/{id}/edit', 'SubServiceController@edit')->name('subService.edit');
    Route::put('/service/{id}/update', 'SubServiceController@update')->name('subService.update');

    Route::get('/advantage/addAdvantage', 'AdvantageController@create');
    Route::post('/advantage/addAdvantage', 'AdvantageController@store')->name('advantage.store');
    Route::get('/advantage/viewAdvantage', 'AdvantageController@show')->name('advantage.show');
    Route::delete('/advantage/{id}/delete', 'AdvantageController@destroy')->name('advantage.delete');
    Route::get('/advantage/{id}/edit', 'AdvantageController@edit')->name('advantage.edit');
    Route::put('/advantage/{id}/update', 'AdvantageController@update')->name('advantage.update');

    Route::get('/project_request/addProjectRequest', 'ProjectRequestController@create');
    Route::post('/project_request/addProjectRequest', 'ProjectRequestController@store')->name('projectRequest.store');
    Route::get('/project_request/viewProjectRequest', 'ProjectRequestController@show')->name('projectRequest.show');
    Route::delete('/project_request/{id}/delete', 'ProjectRequestController@destroy')->name('projectRequest.delete');
    Route::get('/project_request/{id}/edit', 'ProjectRequestController@edit')->name('projectRequest.edit');
    Route::put('/project_request/{id}/update', 'ProjectRequestController@update')->name('projectRequest.update');
    Route::get('/project_request/addImageProjectRequest', 'ProjectRequestController@create_image')->name('projectRequest.create_image');
    Route::post('/project_request/addImageProjectRequest', 'ProjectRequestController@store_image')->name('projectRequest.store_image');
    Route::delete('/project_request/{id}/delete', 'ProjectRequestController@destroy_image')->name('projectRequest.delete');
    Route::get('/project_request/{id}/edit', 'ProjectRequestController@editImage')->name('projectRequest.editImage');
    Route::put('/project_request/{id}/update', 'ProjectRequestController@updateImage')->name('projectRequest.updateImage');

    Route::get('/business/addBusiness', 'BusinessController@create');
    Route::post('/business/addBusiness', 'BusinessController@store')->name('business.store');
    Route::get('/business/viewBusiness', 'BusinessController@index')->name('business.index');
    Route::delete('/business/{id}/delete', 'BusinessController@destroy')->name('business.delete');
    Route::get('/business/{id}/edit', 'BusinessController@edit')->name('business.edit');
    Route::put('/business/{id}/update', 'BusinessController@update')->name('business.update');

    Route::get('/business/photo/addBusinessPhoto', 'BusinessPhotoController@create');
    Route::post('/business/photo/addBusinessPhoto', 'BusinessPhotoController@store')->name('businessPhoto.store');



});

Route::get('/', 'website\HomeController@index');
Route::get('/services/{id}/details', 'website\HomeController@showService')->name('serviceDetail.show');
Route::get('/advantages/{id}/details', 'website\HomeController@showAdvantage');
Route::get('/subServices/{id}/details', 'website\HomeController@showSubService')->name('subService.show');
Route::get('/project_request/{id}/details', 'website\HomeController@showProjectRequest');
Route::get('/business/{id}/details', 'website\HomeController@showBusiness')->name('businessDetail.show');








