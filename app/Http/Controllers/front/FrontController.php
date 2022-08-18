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

}
