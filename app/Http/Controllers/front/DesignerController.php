<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Designer;
use App\Models\User;
use App\Models\Video;

class DesignerController extends Controller
{
    public function index(){
        $config = Config::find(1);

        return view('front.detailPages.designers', compact('config'));
    }

    public function profile($id){
        $config = Config::find(1);
        $designers = User::find($id);


        return view('front.detailPages.profile', compact('config', 'designers'));

    }

}
