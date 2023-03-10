<?php

namespace App\Http\Controllers\Back;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Poster;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as img;
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
        if (Auth::id() <= 3){
            $user_admin = Auth::user();
            $posters = Poster::orderBy('created_at', 'ASC')->get();
            return view("back.posters.index", compact('posters' , 'user_admin'));
        }else{
            $user = Auth::user();
            $posters = Poster::where('user_id' , Auth::id())->orderBy('created_at', 'ASC')->get();
            return view("back.posters.index", compact('posters' , 'user'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if (Auth::id() <= 3){
            $user_admin = Auth::user();
            return view("back.posters.create", compact('user_admin', 'categories'));
        } else {
            $user = Auth::user();
            return view("back.posters.create", compact('user', 'categories'));
        }
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
            'image'=>'required|image|mimes:jpeg,png,jpg'
            ],
            [
            '   title.required' => 'Afi?? Ba??l?????? bo?? b??rak??lamaz.',
                'image.required' => 'Foto??raf alan?? bo?? b??rak??lamaz.',
                'contentt.required' => 'A????klama bo?? b??rak??lamaz.',
                'tarih.required' => 'Tarih bo?? b??rak??lamaz.',
                'baski.required' => 'Bask?? Tekni??i bo?? b??rak??lamaz.',
                'ebat.required' => 'Ebat bo?? b??rak??lamaz.',

            ]
        );

        $poster=new Poster();
        $poster->user_id = Auth::id();
        $poster->title=Helper::scriptStripper($request->title);
        $poster->printing_technique=Helper::scriptStripper($request->baski);
        $poster->dimensions=Helper::scriptStripper($request->ebat);
        $poster->country=Helper::scriptStripper($request->yer);
        $poster->date=Helper::scriptStripper($request->tarih);
        $poster->category_id=Helper::scriptStripper($request->category_id);
        $poster->explanation=$request->contentt;

        if ($request->hasFile('image')){
            $imageName=$request->title.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/original/'),$imageName);
            $poster->image = $imageName;
            $size=getimagesize('uploads/original/'.$imageName);
            $oran = array_values($size)[0]/300;
            $imageName2=img::make(public_path().'/uploads/original/'.$imageName)->resize(330,(int)(array_values($size)[1]/$oran));
            $imageName2->save(public_path().'/uploads/thumbnail/'.$imageName , 100);

        }
        $poster->save();
        return back()->with('success','Afi?? ba??ar??yla olu??turuldu');

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
        $idd = Auth::id();
        $user = User::findOrFail($idd);
        $poster = Poster::findOrFail($id);
        $categories = Category::where('name' , 'not like' , "%{$poster->getCategory->name}%")->get();
        return view("back.posters.update", compact('poster' , 'user' , 'categories'));
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
            'image'=>'image|mimes:jpeg,png,jpg'
        ]);

        $poster= Poster::findOrFail($id);
        $poster->title=Helper::scriptStripper($request->title);
        $poster->printing_technique=Helper::scriptStripper($request->baski);
        $poster->dimensions=Helper::scriptStripper($request->ebat);
        $poster->country=Helper::scriptStripper($request->yer);
        $poster->date=Helper::scriptStripper($request->tarih);
        $poster->category_id=Helper::scriptStripper($request->category_id);
        $poster->explanation=$request->contentt;

        $poster->save();

        if (isset($request->image)) {

                    $old_image = public_path() . $poster->image;
                    if (file_exists($old_image) && !is_null($poster->image)) {
                        unlink($old_image);
                    }

                    if ($request->hasFile('image')){
                        $imageName=$request->title.'.'.$request->image->getClientOriginalExtension();
                        $request->image->move(public_path('uploads/original/'),$imageName);
                        $poster->image = $imageName;
                        $size=getimagesize('uploads/original/'.$imageName);
                        $oran = array_values($size)[0]/300;
                        $imageName2=img::make(public_path().'/uploads/original/'.$imageName)->resize(330,(int)(array_values($size)[1]/$oran));
                        $imageName2->save(public_path().'/uploads/thumbnail/'.$imageName , 100);

                    }

                    $poster->save();

                }

            return back()->with('success','Poster ba??ar??yla g??ncellendi');

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
        return back()->with('success','Poster ba??ar??yla silindi');
    }

    function getDetail(Request $request)
    {

        $posters = Poster::where('id', $request->id)->first();
        $user = User::find($posters->user_id);
        return response()->json(['image' => '/uploads/original/'.$posters->image,'designer_name' => $posters->user_id, 'title' => $posters->title, 'name' => $user->name, 'user_id' => $user->id,
            'yer' => $posters->country,'baski' => $posters->printing_technique,'ebat' => $posters->dimensions, 'tarih' => $posters->date,'contentt' => $posters->explanation]);

    }
}
