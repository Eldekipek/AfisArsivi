<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class PosterController extends Controller
{
    public function culture(){
        return view('front.detailPages.culture');
    }

    public function social(){
        return view('front.detailPages.social');
    }

    public function advertisement(){
        return view('front.detailPages.advertisement');
    }
}
