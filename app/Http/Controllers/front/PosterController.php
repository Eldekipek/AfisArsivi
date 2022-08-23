<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;

class PosterController extends Controller
{
    public function culture(){
        $config = Config::find(1);

        return view('front.detailPages.culture', compact('config'));
    }

    public function social(){
        $config = Config::find(1);

        return view('front.detailPages.social', compact('config'));
    }

    public function advertisement(){
        $config = Config::find(1);

        return view('front.detailPages.advertisement', compact('config'));
    }
}
