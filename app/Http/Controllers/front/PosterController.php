<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Poster;

class PosterController extends Controller
{
    public function culture(){
        $config = Config::find(1);
        $culture_poster=Poster::where('category_id',2)->get();

        return view('front.detailPages.culture', compact('config','culture_poster'));
    }

    public function social(){
        $config = Config::find(1);
        $social_poster=Poster::where('category_id',3)->get();

        return view('front.detailPages.social', compact('config','social_poster'));
    }

    public function advertisement(){
        $config = Config::find(1);
        $advertisement_poster=Poster::where('category_id',1)->get();

        return view('front.detailPages.advertisement', compact('config','advertisement_poster'));
    }

    public function archive(){
        $config = Config::find(1);
        $posters=Poster::all();

        return view('front.detailPages.archive', compact('config','posters'));

    }
}
