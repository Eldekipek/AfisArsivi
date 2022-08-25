<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function index(){
        $user = Auth::user();

        $config=Config::find(1);
        return view('back.config.index',compact('config' , 'user'));
    }

    public function update(Request $request){
        $config=Config::find(1);
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
