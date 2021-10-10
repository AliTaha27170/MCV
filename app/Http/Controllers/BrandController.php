<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Validator;
use File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
            'name' => 'required|unique:brands|max:125|min:2'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->first());
        }

        $ext = $request->file('image')->getClientOriginalExtension();
        // filename to store
        $image= $request->input('name').'.'.$ext;
        // upload image
        $path = public_path().'/img';
        $uplaod = $request->file('image')->move($path,$image);
        $requestData = $request->all();
        $requestData['image'] = $image;

        Brand::create($requestData);
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
        $brand = Brand::find($id);
        return view('admin.brands.edit',compact('brand'));
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
        $brand = Brand::find($id);

        if($request->file('image')==""){
            $requestData['image'] = $brand->image;
        }else{
            // delete old image
            $image_path= public_path('img/'.$brand->image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $ext = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $image= $request->input('name').'.'.$ext;
            // upload image
            $path = public_path().'/img';
            $uplaod = $request->file('image')->move($path,$image);
            $requestData['image'] = $image;
        }
        $brand->update($requestData);
        return redirect('administrator/brands')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        // delete image
        $image_path= public_path('img/'.$brand->image);

        if(File::exists($image_path)){
            File::delete($image_path);
        }

        $brand->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}
