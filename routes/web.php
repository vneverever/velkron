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

Route::group(['domain' => 'velkron.club'], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('reports', 'ReportController@index');
    Route::get('campaigns', 'CampaignController@index');
    Route::get('new_campaigns', 'New_CampaignController@index');
    Route::get('payments', 'PaymentController@index');
    Route::get('settings', 'SettingController@index');
});


Route::any('{all}', 'SitesPublicController@index')->where('all', '.*');

