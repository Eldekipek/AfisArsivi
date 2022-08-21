<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use function view;

class FrontController extends Controller
{
    public function index(){
        return view('front.layout');
    }

    public function home(){
        return view('front.home.home');

    }

    public function about(){
        return view('front.detailPages.about');

    }

    public function loginregister(){
        return view('front.detailPages.loginRegister');
    }

    public function designerpage(){
        return view('front.detailPages.designers');
    }
  }
