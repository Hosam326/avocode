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

    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');

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

    Route::get('/advertising/addAdvertising', 'AdvertisingController@create');
    Route::post('/advertising/addAdvertising', 'AdvertisingController@store')->name('advertising.store');
    Route::get('/advertising/viewAdvertising', 'AdvertisingController@index')->name('advertising.index');
    Route::delete('/advertising/{id}/delete', 'AdvertisingController@destroy')->name('advertising.delete');
    Route::get('/advertising/{id}/edit', 'AdvertisingController@edit')->name('advertising.edit');
    Route::put('/advertising/{id}/update', 'AdvertisingController@update')->name('advertising.update');

    Route::get('/blog/addBlog', 'BlogController@create');
    Route::post('/blog/addBlog', 'BlogController@store')->name('blog.store');
    Route::get('/blog/viewBlog', 'BlogController@index')->name('blog.index');
    Route::delete('/blog/{id}/delete', 'BlogController@destroy')->name('blog.delete');
    Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
    Route::put('/blog/{id}/update', 'BlogController@update')->name('blog.update');

    Route::get('/about/about', 'AboutController@create');
    Route::post('/about/about', 'AboutController@store')->name('about.store');
    Route::get('/about/viewAbout', 'AboutController@index')->name('about.index');
    Route::delete('/about/{id}/delete', 'AboutController@destroy')->name('about.delete');
    Route::get('/about/{id}/edit', 'AboutController@edit')->name('about.edit');
    Route::put('/about/{id}/update', 'AboutController@update')->name('about.update');

    Route::get('/rating/rating', 'RatingController@create');
    Route::post('/rating/rating', 'RatingController@store')->name('rating.store');
    Route::get('/rating/viewRating', 'RatingController@index')->name('rating.index');
    Route::delete('/rating/{id}/delete', 'RatingController@destroy')->name('rating.delete');
    Route::get('/rating/{id}/edit', 'RatingController@edit')->name('rating.edit');
    Route::put('/rating/{id}/update', 'RatingController@update')->name('rating.update');

    Route::get('/team/addMember', 'TeamController@create');
    Route::post('/team/addMember', 'TeamController@store')->name('team.store');
    Route::get('/team/viewMember', 'TeamController@index')->name('team.index');
    Route::delete('/team/{id}/delete', 'TeamController@destroy')->name('team.delete');
    Route::get('/team/{id}/edit', 'TeamController@edit')->name('team.edit');
    Route::put('/team/{id}/update', 'TeamController@update')->name('team.update');

    Route::get('/personal/personal', 'PersonalController@create');
    Route::post('/personal/personal', 'PersonalController@store')->name('personal.store');
    Route::get('/personal/viewPersonal', 'PersonalController@index')->name('personal.index');
    Route::delete('/personal/{id}/delete', 'PersonalController@destroy')->name('personal.delete');
    Route::get('/personal/{id}/edit', 'PersonalController@edit')->name('personal.edit');
    Route::put('/personal/{id}/update', 'PersonalController@update')->name('personal.update');

    Route::get('/groupComp/group', 'GroupController@create');
    Route::post('/groupComp/group', 'GroupController@store')->name('group.store');
    Route::get('/groupComp/viewGroup', 'GroupController@index')->name('group.index');
    Route::delete('/groupComp/{id}/delete', 'GroupController@destroy')->name('group.delete');
    Route::get('/groupComp/{id}/edit', 'GroupController@edit')->name('group.edit');
    Route::put('/groupComp/{id}/update', 'GroupController@update')->name('group.update');

    Route::get('/settings/add', 'SettingController@create');
    Route::post('/settings/add', 'SettingController@store')->name('setting.store');
    Route::get('/settings/view', 'SettingController@index')->name('setting.index');
    Route::delete('/settings/{id}/delete', 'SettingController@destroy')->name('setting.delete');
    Route::get('/settings/{id}/edit', 'SettingController@edit')->name('setting.edit');
    Route::put('/settings/{id}/update', 'SettingController@update')->name('setting.update');

    Route::get('/privacyTrm/add', 'PrivacyController@create');
    Route::post('/privacyTrm/add', 'PrivacyController@store')->name('privacy.store');
    Route::get('/privacyTrm/view', 'PrivacyController@index')->name('privacy.index');
    Route::delete('/privacyTrm/{id}/delete', 'PrivacyController@destroy')->name('privacy.delete');
    Route::get('/privacyTrm/{id}/edit', 'PrivacyController@edit')->name('privacy.edit');
    Route::put('/privacyTrm/{id}/update', 'PrivacyController@update')->name('privacy.update');
});

Route::get('/', 'website\HomeController@index')->name('home');
Route::get('/services/{id}/details', 'website\HomeController@showService')->name('serviceDetail.show');
Route::get('/advantages/{id}/details', 'website\HomeController@showAdvantage');
Route::get('/subServices/{id}/details', 'website\HomeController@showSubService')->name('subService.show');
Route::get('/project_request/{id}/details', 'website\HomeController@showProjectRequest');
Route::get('/business/{id}/details', 'website\HomeController@showBusiness')->name('businessDetail.show');
Route::get('/our_work', 'website\HomeController@our_works')->name('our_works.show');
Route::get('/advertising/{id}/details', 'website\HomeController@showAdvertising');
Route::get('/blog/{id}/details', 'website\HomeController@showBlog')->name('blog.index');
Route::get('/about', 'website\HomeController@about_As')->name('about_As.show');
Route::get('/group_company', 'website\HomeController@group_company')->name('group_company.show');
Route::get('/team', 'website\HomeController@team')->name('team.show');
Route::get('/trm', 'website\HomeController@trm')->name('trm.show');
Route::get('/privacy', 'website\HomeController@privacy')->name('privacy.show');
Route::get('/rating', 'website\HomeController@rating')->name('rating.show');
Route::get('/blog', 'website\HomeController@blog')->name('blog.show');
Route::get('/advertising/{id}/details', 'website\HomeController@showAdvertising');
Route::get('/jopApp', 'website\HomeController@jopApp')->name('jopApp.show');
Route::post('/jopApp/create', 'website\HomeController@jopAppStore')->name('jopAppStore');
Route::get('/contact', 'website\HomeController@contact')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/blog_rate', 'BlogRatingController@store')->name('rating.store');
//Route::resource('contact', 'ContactController');





















