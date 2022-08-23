<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;

class DesignerController extends Controller
{
    public function index(){
        $config = Config::find(1);

        return view('front.detailPages.designers', compact('config'));
    }

    public function profile(){
        $config = Config::find(1);

        return view('front.detailPages.profile', compact('config'));

    }

}
