<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Category;
use File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:125|min:2'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->first());
        }

        $ext = $request->file('image')->getClientOriginalExtension();
        // filename to store
        $image= $request->input('name').'.'.$ext;
        // upload image
        $path = public_path().'/img/covers';
        $uplaod = $request->file('image')->move($path,$image);
        $requestData = $request->all();
        $requestData['cover'] = $image;

        Category::create($requestData);
        return redirect()->back()->with('success','Added successfully');
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
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:125|min:2'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->first());
        }
        $requestData = $request->all();
        $category = Category::find($id);

        if($request->file('image')==""){
            $requestData['cover'] = $category->cover;
        }else{
            // delete old image
            $image_path= public_path('img/covers/'.$category->cover);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $ext = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $image= $request->input('name').'.'.$ext;
            // upload image
            $path = public_path().'/img/covers';
            $uplaod = $request->file('image')->move($path,$image);
            $requestData['cover'] = $image;
        }

        $category->update($request->all());
        return redirect('administrator/categories')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $image_path= public_path('img/covers/'.$category->cover);
        if(File::exists($image_path)){
            File::delete($image_path);
        }

        $category->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}
