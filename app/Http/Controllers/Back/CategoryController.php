<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('back.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $isExist=Category::where('name', $request->category)->first();
        if ($isExist){
            return back()->with('error', 'Aynı isimde bir kategori bulunmakta');

        }
        $category=new Category;
        $category->name=$request->category;
        $category->save();
        return back()->with('success','Kategori başarıyla oluşturuldu');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $isName=Category::where('name', $request->category)->whereNotIn('id',[$request->id])->first();
        if ($isName){
            toastr()->error('Aynı isimde bir kategori bulunmakta');
            return redirect()->back();
        }
        $category= Category::find($request->id);
        $category->name=$request->category;
        $category->save();
        toastr()->success('Kategori başarıyla güncellendi');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getData(Request $request){
        $category=Category::findOrFail($request->id);
        return response()->json($category);

    }

    public function switch(Request $request){
        $category=Category::findOrFail($request->id);
        $category->status=$request->statu=="true" ? 1 : 0 ;
        $category->save();

    }

    public function delete(Request $request)
    {
        $category=Category::findOrFail($request->id);
        $category->delete();
        return back()->with('success','Kategori başarıyla silindi');
    }
}
