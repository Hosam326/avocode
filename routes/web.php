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

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::post('/login','AdminController@login')->name('admin.login');

    Route::get('/home', function (){
        return view('layout');
    })->name('home');

    Route::post('logout','Auth\LoginController@logout');

    Route::get('/slider/addSlider','SliderController@create');
    Route::post('/slider/addSlider','SliderController@store')->name('slider.store');
    Route::get('/slider/viewSlider' , 'SliderController@show');

    Route::get('/tags/addTag','TagController@create');
    Route::post('/tags/addTag','TagController@store')->name('tags.store');

    Route::get('/service/addService','ServiceController@create');
    Route::post('/service/addService','ServiceController@store')->name('service.store');


    Route::get('/service/subService','SubServiceController@create');
    Route::post('/service/subService','SubServiceController@store')->name('subService.store');


});

    Route::get('/' , 'SliderController@index');


