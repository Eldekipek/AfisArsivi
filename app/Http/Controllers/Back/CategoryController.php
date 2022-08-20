<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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
//            toastr()->error($request->category.' adında bir kategori zaten mevcut!');
//            return redirect()->back();
            //HATA EKRANA BASILACAK

        }
        $category=new Category;
        $category->name=$request->category;
        $category->save();
        return redirect("admin/category");

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
//            toastr()->error($request->category.' adında bir kategori zaten mevcut!');
//            return redirect()->back();
        }
        $category= Category::find($request->id);
        $category->name=$request->category;
        $category->save();
//        toastr()->success('Kategori Başarıyla Güncellendi');
//        return redirect()->back();
        return redirect("admin/category");

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
        return redirect("admin/category");


    }
}
