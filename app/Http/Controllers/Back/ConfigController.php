<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function index(){
        $config=Config::find(1);
        if (Auth::id() <= 3){
            $user_admin = Auth::user();
            return view('back.config.index',compact('config' , 'user_admin'));
        } else {
            $user = Auth::user();
            return view('back.config.index',compact('config' , 'user'));
        }
    }

    public function update(Request $request){
        $request->validate(
            [
                "twitter" => "string|max:255",
                "instagram" => "string|max:255",
                "facebook" => "string|max:255",
                "linkedin" => "string|max:255",

            ]
        );
        $config = new Config();
        $config->twitter=$request->twitter;
        $config->instagram=$request->instagram;
        $config->facebook=$request->facebook;
        $config->linkedin=$request->linkedin;

       /* if ($request->hasFile('logo')){
            $logo=str_slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads'),$logo);
            $config->logo='uploads/'.$logo;
        }
        if ($request->hasFile('favicon')){
            $favicon=str_slug($request->title).'-favicon.'.$request->favicon->getClientOriginalExtension();
            $request->favicon->move(public_path('uploads'),$favicon);
            $config->favicon='uploads/'.$favicon;
        }*/
        $config->save();
        toastr()->success('Ayarlar başarıyla güncellendi');
        return redirect()->back();
    }
}
