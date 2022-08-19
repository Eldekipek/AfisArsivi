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

        });
    });

    Route::group(['prefix' => 'poster'], function () {
        Route::controller(PosterController::class)->group(function () {
            Route::get('/culture','culture')->name('poster.culture');
            Route::get('/social','social')->name('poster.social');
            Route::get('/advertisement','advertisement')->name('poster.advertisement');

        });
    });

    Route::group(['prefix' => 'designer'], function () {
        Route::controller(DesignerController::class)->group(function () {
            Route::get('/','index')->name('designer.index');

        });
    });

Route::get('/profile', function () {
    return view('front.detailPages.profile');
});

    //front routes finish
    //
    //
    //panel routes start



    //panel routes finish

