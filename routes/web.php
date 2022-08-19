<?php

use App\Http\Controllers\front\DesignerController;
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

    Route::get('/', function () {
        return view('front.home.home');
    });

    Route::get('/layout', function () {
        return view('front.layout');
    });

    Route::group(['prefix' => 'poster'], function () {
        Route::controller(PosterController::class)->group(function () {

        });
    });

    Route::group(['prefix' => 'designer'], function () {
        Route::controller(DesignerController::class)->group(function () {
            Route::get('/','index')->name('designer.index');

        });
    });

    Route::get('/about', function () {
        return view('front.detailPages.about');
    });

Route::get('/culture', function () {
    return view('front.detailPages.culture');
});

Route::get('/social', function () {
    return view('front.detailPages.social');
});

Route::get('/advertisement', function () {
    return view('front.detailPages.advertisement');
});

    //front routes finish
    //
    //
    //panel routes start



    //panel routes finish

