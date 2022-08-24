<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Poster;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function Termwind\renderUsing;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posters = Poster::orderBy('created_at', 'ASC')->get();
        return view("back.posters.index", compact('posters' , 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $user = Auth::user();
        return view("back.posters.create", compact('user', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'title'=>'required | min:3',
            'baski'=>'required | min:3',
            'ebat' =>'required | min:3',
            'yer'=>'required | min:3',
            'tarih'=> 'required',
            'contentt'=> 'required | min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $poster=new Poster();
        $poster->user_id = Auth::id();
        $poster->title=$request->title;
        $poster->printing_technique=$request->baski;
        $poster->dimensions=$request->ebat;
        $poster->country=$request->yer;
        $poster->date=$request->tarih;
        $poster->category_id=$request->category_id;
        $poster->explanation=$request->contentt;

        if ($request->hasFile('image')){
            $imageName=$request->title.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $poster->image='uploads/'.$imageName;
        }
        $poster->save();
        return back()->with('success','Poster başarıyla oluşturuldu');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poster = Poster::findOrFail($id);
        return view("back.posters.update", compact('poster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required | min:3',
            'baski'=>'required | min:3',
            'ebat' =>'required | min:3',
            'yer'=>'required | min:3',
            'tarih'=> 'required',
            'contentt'=> 'required | min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $poster= Poster::findOrFail($id);
        $poster->title=$request->title;
        $poster->printing_technique=$request->baski;
        $poster->dimensions=$request->ebat;
        $poster->country=$request->yer;
        $poster->date=$request->tarih;
        $poster->category=$request->category;
        $poster->explanation=$request->contentt;

        if ($request->hasFile('image')){
            $imageName=$request->title.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $poster->image='uploads/'.$imageName;
        }
        $poster->save();
        return back()->with('success','Poster başarıyla güncellendi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Poster::find($id)->delete();

    }

    public function delete($id){
        Poster::find($id)->delete();
        return back()->with('success','Poster başarıyla silindi');
    }
}
