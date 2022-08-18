<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class DesignerController extends Controller
{
    public function index(){
        return view('front.detailPages.designers');
    }
}
