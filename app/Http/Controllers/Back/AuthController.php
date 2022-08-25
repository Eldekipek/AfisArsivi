<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//            toastr()->success('Tekrardan Hoşgeldiniz' , Auth::user()->name);
            $user = Auth::user();
            if ($user->country_id){
                return redirect()->route('front.home');
            }else{
                return redirect()->route('user.settings.index');
            }
        }
        return redirect()->route('login.index')->withErrors('Email adresi veya şifre hatalı!');
    }
}
