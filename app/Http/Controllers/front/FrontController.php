<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use function view;

class FrontController extends Controller
{
    public function index(){
        $config = Config::find(1);
        return view('front.layout', compact('config'));
    }

    public function home(){
        $config = Config::find(1);
        return view('front.home.home', compact('config'));

    }

    public function about(){
        $config = Config::find(1);

        return view('front.detailPages.about', compact('config'));

    }

    public function loginregister(){

        return view('front.detailPages.loginRegister');
    }

    public function designerpage(){
        $config = Config::find(1);
        return view('front.detailPages.designers', compact('config'));
    }

    public function registerUser(Request $request){

        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|email|unique:users',
            'password' => 'required|min:8|max:255|confirmed'
        ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            if ($user->save()){
                return back()->with('success','Kayıt başarılı, lütfen giriş yapınız');
            }
    }

  }
