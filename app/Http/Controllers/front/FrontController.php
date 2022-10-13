<?php

namespace App\Http\Controllers\front;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Designer;
use App\Models\Poster;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function view;

class FrontController extends Controller
{
    public function index(){
        $config = Config::find(1);
        return view('front.layout', compact('config'));
    }

    public function home(){
        $postersArray = array();
        $config = Config::find(1);
        $posters=Poster::inRandomOrder()->get()->take(30);
        $designers=User::orderBy('created_at', 'DESC')->get();
        $designer_last=User::orderBy('created_at', 'DESC')->first();
        $social_poster=Poster::where('category_id',3)->get()->take(8);
        $tipografi_poster=Poster::where('category_id',4)->get()->take(8);
        $other_poster=Poster::where('category_id',5)->get()->take(8);
        $culture_poster=Poster::where('category_id',2)->get()->take(8);
        $advertisement_poster=Poster::where('category_id',1)->get()->take(8);
        foreach ($designers as $designer){
            $designer_posters = Poster::where('user_id', $designer->id)->get()->take(6);
                array_push($postersArray,[$designer->name => $designer_posters]);
        }
        return view('front.home.home', compact('config', 'posters','culture_poster','social_poster','advertisement_poster','designers','designer_posters','tipografi_poster','postersArray','other_poster'));

    }

    public function about(){
        $config = Config::find(1);
        $page = AboutPage::find(1);

        return view('back.about', compact('config' , 'page'));

    }

    public function contact(){
        $config = Config::find(1);
        $contact = Contact::find(1);

        return view('back.about', compact('config' , 'contact'));

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
            $user->name = Helper::scriptStripper($request->name);
            $user->email = Helper::scriptStripper($request->email);
            $user->password = bcrypt($request->password);
            $user->save();
            if ($user->save()){
                return back()->with('message','Kayıt başarılı, lütfen giriş yapınız');
            }
        }else{
            return back()->with('error');
        }
        }

        public function logout(){
            Auth::logout();
            return redirect()->route('front.home');
        }


  }
