<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUsers(){
        $users = User::all();
        return view('back.users.index', compact('users'));
    }

    public function delete(Request $request)
    {
        $user=User::findOrFail($request->id);
        $user->delete();
        return back()->with('success','Kullanıcı başarıyla silindi');
    }
}
