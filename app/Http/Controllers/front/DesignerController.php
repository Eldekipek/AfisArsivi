<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Poster;
use App\Models\User;

class DesignerController extends Controller
{
    public function index(){
        $designers = User::where('id' , '>', 2)->get();

        return view('front.detailPages.designers', compact('designers'));

    }

    public function profile($id){
        $designer = User::find($id);
        $posters = Poster::where('user_id',$designer->id)->get();

        return view('front.detailPages.profile', compact('designer','posters'));

    }

    public function search(){
    if(\request('search_query')){
        $search_key = strip_tags(trim(\request('search_query')));
        $designerr = User::where('name','like','%'.$search_key.'%')->get();
        return view('front.detailPages.designers', compact('designerr'));

    }

}
}
