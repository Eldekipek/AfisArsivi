<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        if (Auth::check()){
            return view("back.dashboard", compact('user'));
        }
        else{
            return redirect("/")->with('error', 'Lütfen panele gitmek için önce giriş yapınız');
        }
    }

    public function userSettingsIndex(){
        $id = Auth::id();
        $user = User::find($id);
        $countries = Country::all();
        return view("back.user-settings", compact('user' , 'countries'));
    }

    public function userSettingsUpdate(Request $request){
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->website = $request->website;
        $user->country_id = $request->country_id;
        $a=Carbon::create( $request->birthday);
        $a=$a->format('d-m-Y H:i:s.u');
        $newDate =Carbon::parse($a);
        $user->birthday = $newDate;

        if ($request->hasFile('image')){
        $imageName=$request->title.'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $user->image='uploads/'.$imageName;
        }
        $user->save();
        return back()->with('success','Kullanıcı ayarları başarıyla güncellendi');

    }
}
