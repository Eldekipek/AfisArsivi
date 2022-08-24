<?php

use App\Http\Controllers\front\DesignerController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\PosterController;
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

    //front routes start
    Route::get('/layout', function () {
     return view('front.layout');
        });

    Route::group(['prefix' => '/'], function () {
        Route::controller(FrontController::class)->group(function () {
            Route::get('/','home')->name('front.home');
            Route::get('/login' , 'loginregister')->name("login.index");
            Route::get('/logout' , 'logout')->name("logout");
            Route::get('/register', 'loginregister')->name("register.index");
            Route::get('/about', 'about')->name("about.index");
            Route::get('/designers' , 'designerpage')->name('designers.index');
            Route::post('/register' ,'registerUser')->name("register.user.create");
        });

    });
    Route::controller(\App\Http\Controllers\Back\AuthController::class)->group(function () {
        Route::post('/login', 'loginPost')->name("login.post");
    });


    Route::group(['prefix' => 'poster'], function () {
        Route::controller(PosterController::class)->group(function () {
            Route::get('/culture','culture')->name('poster.culture');
            Route::get('/social','social')->name('poster.social');
            Route::get('/advertisement','advertisement')->name('poster.advertisement');
            Route::get('/archive','archive')->name('poster.archive');

        });
    });

    Route::controller(\App\Http\Controllers\Back\ConfigController::class)->group(function (){
        Route::get('/ayarlar','App\Http\Controllers\Back\ConfigController@index')->name('config.index');
        Route::post('/ayarlar/update','App\Http\Controllers\Back\ConfigController@update')->name('config.update');
    });



    Route::group(['prefix' => 'designer'], function () {
        Route::controller(DesignerController::class)->group(function () {
            Route::get('/','index')->name('designer.index');
            Route::get('/profile{id}','profile')->name('designer.profile');

        });
    });


    //front routes finish
    //
    //
    //panel routes start

        Route::group(['prefix' => 'admin'], function () {
            Route::controller(\App\Http\Controllers\Back\DashboardController::class)->group(function () {
                Route::get('/panel' , 'index')->name("admin.panel");
                Route::get('/user/settings', 'userSettingsIndex')->name("user.settings.index");
                Route::post('/user/settings', 'userSettingsUpdate')->name("user.settings.update");
            });
                Route::controller(\App\Http\Controllers\Back\PosterController::class)->group(function () {
                    Route::get('/poster', 'index')->name("poster.index");
                    Route::get('/poster/create' , 'create')->name("poster.create.index");
                    Route::post('/poster/create' , 'store')->name("poster.create");
                    Route::get('/poster/delete/{id}','delete')->name("delete.poster");
                    Route::get('/poster/update/{id}', 'edit')->name("poster.update.index");
                });
                Route::controller(\App\Http\Controllers\Back\CategoryController::class)->group(function () {
                    Route::get('/category', 'index')->name("category.index");
                    Route::post('/category/create', 'create')->name("category.create");
                    Route::post('/category/update','update')->name('category.update');
                    Route::post('/category/delete','delete')->name('category.delete');
                    Route::get('/category/getData','getData')->name('category.getdata');
                    Route::get('/category/status','switch')->name('category.switch');
                });
                Route::controller(\App\Http\Controllers\Back\UserController::class)->group(function() {
                    Route::get('/users', 'listUsers')->name("users.index");
                    Route::post('users/delete', 'delete')->name("users.delete");
                });
        });
    //panel routes finish

