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

Route::get('/', [
    'uses' => 'HomeController@welcome',
    'as' => 'welcome'
]);

Route::post('/welcome/send', [
    'uses' => 'HomeController@send',
    'as' => 'welcome.send'
]);

Route::resource('projects','ProjectsController');

Route::resource('videos','VideosController');

Auth::routes();

Route::resource('news_updates','NewsUpdatesController');

Route::get('/download/{filename}', 'HomeController@getDownload')->name('download');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newsletter', 'HomeController@newsletter')->name('newsletter');

Route::get('/who_we_are/why_we_are', 'HomeController@why_we_are')->name('why_we_are');

Route::get('/who_we_are/objectives', 'HomeController@objectives')->name('objectives');

Route::get('/who_we_are/sub_committees', 'HomeController@sub_committees')->name('sub_committees');

Route::get('/who_we_are/executive_committees', 'HomeController@executive_committees')->name('executive_committees');

Route::get('/what_we_do/our_services', 'HomeController@our_services')->name('our_services');

Route::get('/what_we_do/informal', 'HomeController@informal')->name('informal');

Route::get('/what_we_do/formal', 'HomeController@formal')->name('formal');

Route::get('/what_we_do/technical', 'HomeController@technical')->name('technical');

Route::get('/what_we_do/it', 'HomeController@it')->name('it');

Route::get('/accounts/financial', 'HomeController@financial')->name('financial');

Route::get('/accounts/corruption', 'HomeController@corruption')->name('corruption');

Route::get('/accounts/waste_management', 'HomeController@waste_management')->name('waste_management');

Route::get('/accounts/endowment_fund', 'HomeController@endowment_fund')->name('endowment_fund');

Route::get('/our_projects/ensuing_projects', 'HomeController@ensuing_projects')->name('ensuing_projects');

Route::get('/our_projects/capital_projects', 'HomeController@capital_projects')->name('capital_projects');

Route::get('/funding', 'HomeController@funding')->name('funding');

Route::get('/success_stories', 'HomeController@success_stories')->name('success_stories');

Route::get('/road_map', 'HomeController@road_map')->name('road_map');

Route::get('/jobs', 'HomeController@jobs')->name('jobs');

Route::post('/send_cv', 'CareerController@send_cv')->name('send_cv');

Route::put('/careers/doneEditing/{id}', 'CareerController@update')->name('done.editing');

Route::resource('careers','CareerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
