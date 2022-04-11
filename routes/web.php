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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/projects_scroll', 'PagesController@projects_scroll')->name('projects_scroll');
Route::get('/singular_project', 'PagesController@singular_project')->name('singular_project');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');




Route::group(['prefix'=>'about','as'=>'about.'], function(){
    Route::get('education', 'SubPagesController@education')->name('education');
    Route::get('expertise', 'SubPagesController@expertise')->name('expertise');
    Route::get('experience', 'SubPagesController@experience')->name('experience');
    Route::get('volunteer_services', 'SubPagesController@volunteer_services')->name('volunteer_services');
    Route::get('recommendations', 'SubPagesController@recommendations')->name('recommendations');
});


Route::get('/contact_us', 'ContactController@create')->name('contact_us');
Route::post('/contact_us', 'ContactController@sendMessage');




