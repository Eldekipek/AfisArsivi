<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function listUsers(){
        $users = User::all();
        if (Auth::id() <= 3){
            $user_admin = Auth::user();
            return view('back.users.index', compact('users' , 'user_admin'));
        } else {
            $user = Auth::user();
            return view('back.users.index', compact('users'));
        }
    }

    public function delete(Request $request)
    {
        $user=User::findOrFail($request->id);
        $user->delete();
        return back()->with('success','Kullanıcı başarıyla silindi');
    }
}
