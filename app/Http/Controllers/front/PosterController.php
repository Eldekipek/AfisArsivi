<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Config;
use App\Models\Poster;
use App\Models\User;
use Illuminate\Http\Request;

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
        $posters=Poster::orderBy('created_at', 'DESC')->get();

        return view('front.detailPages.archive-poster', compact('config','posters'));

    }

    public function tipografi(){
        $config = Config::find(1);
        $tipografi_poster=Poster::where('category_id',4)->get();

        return view('front.detailPages.tipografi', compact('config','tipografi_poster'));

    }

    public function other(){
        $config = Config::find(1);
        $other_poster=Poster::where('category_id',5)->get();

        return view('front.detailPages.other', compact('config','other_poster'));

    }
}
