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

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|email|unique:users',
            'password' => 'required|min:8|max:255|confirmed'
            ],
            [
                'name.required' => 'İsim alanı boş bırakılamaz.',
                'email.required' => 'Email alanı boş bırakılamaz.',
                'password.required' => 'Şifre Alanı boş bırakılamaz.',
                'name.min' => 'İsim alanı en az 3 karakterli olmalıdır.',
                'email.unique' => 'Bu email daha önce kullanılmıştır.',
                'password.min' => 'Şifre alanı en az 8 karakterli olmalıdır.',

            ]

        );

        if($validatedData){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            if ($user->save()){
                return back()->with('message','Kayıt başarılı, lütfen giriş yapınız');
            }
        }else{
            return back()->with('error');
        }


    }

  }
