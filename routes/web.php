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

Route::get('reports', 'ReportController@index');
Route::get('campaigns', 'CampaignController@index');
Route::get('new_campaigns', 'New_CampaignController@index');
Route::get('reports', 'PaymentController@index');
Route::get('reports', 'SettingController@index');
