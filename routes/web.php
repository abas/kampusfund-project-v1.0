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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function(){
Route::group(['prefix'=>'dashboard'],function(){
  Route::get('/','DashboardController@dashboard')->name('dashboard');
  Route::group(['prefix'=>'/'],function(){

    Route::group(['prefix'=>'campaign'],function(){
      Route::get('/','CampaignController@dashboardCampaign')->name('dashboard-campaign');
      Route::get('/create','CampaignController@create')->name('create-campaign');
      Route::get('/update/{id}','CampaignController@update')->name('update-campaign');
    });

    Route::group(['prefix'=>'blog'],function(){
      Route::get('/','DashboardController@dashboardBlog')->name('dashboard-blog');
      Route::get('/create','BlogController@create')->name('create-blog');
      Route::post('/create','BlogController@store')->name('create-blog-post');
      
    });
    
    Route::group(['prefix'=>'notification'],function(){
      Route::get('/notificaton','DashboardController@notificaton')->name('notificaton');

    });

    Route::group(['prefix'=>'user'],function(){
      Route::get('/setting','UserController@userSetting')->name('user-setting');

      // middleware student
      Route::group(['prefix'=>'student'],function(){
        Route::get('/{id}/edit','UserController@studentEdit')->name('student-edit');
      });

    });

    Route::group(['prefix'=>'proposal'],function(){
      Route::get('/upload','ProposalController@upload')->name('upload-proposal');
        
    });

    Route::group(['prefix'=>'transaction'],function(){
      Route::get('/','TransactionController@transaction')->name('transaction');

    });
  });
});

Route::get('/transaction','TransactionController@transaction')->name('transaction');

Route::group(['prefix'=>'campaign'],function(){
  Route::get('/','CampaignController@index')->name('all-campaign');
  Route::get('/{id}/show','CampaignController@show')->name('single-campaign');
});

Route::group(['prefix'=>'blogs'],function(){
  Route::get('/','BlogController@index')->name('all-blog');
  Route::get('/{id}/show','BlogController@show')->name('single-blog');
});


