<?php

namespace App\Http\Controllers\Back;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){

        if (Auth::check()){
            if (Auth::id() <= 3){
                $user_admin = Auth::user();
                return view("back.dashboard", compact('user_admin'));
            } else {
                $user = Auth::user();
                return view("back.dashboard", compact('user'));
            }
        }
        else{
            return redirect("/")->with('error', 'Lütfen panele gitmek için önce giriş yapınız');
        }
    }

    public function userSettingsIndex(){
        $id = Auth::id();
        if (Auth::id() <= 3) {
            $user_admin = User::find($id);
            $countries = Country::all();
            return view("back.user-settings", compact('user_admin' , 'countries'));
        } else {
            $user = User::find($id);
            $countries = Country::all();
            return view("back.user-settings", compact('user' , 'countries'));
        }

    }

    public function userSettingsUpdate(Request $request){
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user->name = Helper::scriptStripper($request->name);
        $user->website = Helper::scriptStripper($request->website);
        $user->country_id = Helper::scriptStripper($request->country_id);
        $a=Carbon::create( $request->birthday);
        $a=$a->format('d-m-Y H:i:s.u');
        $newDate =Carbon::parse($a);
        $user->birthday = $newDate;

        if ($request->hasFile('image')){
        $imageName=$request->name.'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $user->image='/uploads/'.$imageName;
        }
        $user->save();
        return back()->with('success','Kullanıcı ayarları başarıyla güncellendi');

    }

    public function aboutIndex(){
        $page = AboutPage::find(1);
        $id = Auth::id();
        if (Auth::id() <= 3){
            $user_admin = User::findOrFail($id);
            return view('back.about.create', compact('user_admin', 'page'));
        } else {
            $user = User::findOrFail($id);
            return view('back.about.create', compact('user', 'page'));
        }
    }

    public function aboutUpdate(Request $request){
        $request->validate([
            'contentt'=>'required',
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $page = AboutPage::find(1);
        $page->title=Helper::scriptStripper($request->title);
        $page->content=$request->contentt;

        if ($request->hasFile('image')){
            $imageName=($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $page->image='/uploads/'.$imageName;
        }
        $page->save();
        toastr()->success( 'Sayfa başarıyla güncellendi');

        return redirect()->route('about.update.index');
    }
}
