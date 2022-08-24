<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\User;

class DesignerController extends Controller
{
    public function index(){
        $designers = User::all();


        return view('front.detailPages.designers', compact('designers'));
    }

    public function profile($id){
        $designer = User::find($id);


        return view('front.detailPages.profile', compact('designer'));

    }

}
