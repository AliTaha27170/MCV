<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Brand;
use App\Category;
use Validator;
use File;
use App\Ingredient;
use App\ProductDetail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.create',compact('brands','categories'));
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
            'name' => 'required|unique:products|max:125|min:2',
            'brand_id' => 'required',
            'category_id' => 'required',
            'code' => 'required|unique:products|max:125|min:2',
            'description' => 'required',
            'image' => 'required',
            'big_image' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->first());
        }

        $ext = $request->file('image')->getClientOriginalExtension();
        // filename to store
        $image= $request->input('code').'.'.$ext;
        // upload image
        $path = public_path().'/img/products';
        $uplaod = $request->file('image')->move($path,$image);
        $requestData = $request->all();
        $requestData['image'] = $image;


        $big_ext = $request->file('big_image')->getClientOriginalExtension();
        // filename to store
        $big_image= $request->input('code').'_big.'.$big_ext;
        // upload image
        $path = public_path().'/img/products';
        $uplaod = $request->file('big_image')->move($path,$big_image);
        $requestData['big_image'] = $big_image;

        Product::create($requestData);
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
        $product = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.edit',compact('brands','categories','product'));
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
            'name' => 'required|max:125|min:2',
            'brand_id' => 'required',
            'category_id' => 'required',
            'code' => 'required|max:125|min:2',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->first());
        }

        $requestData = $request->all();
        $product = Product::find($id);

        if($request->file('image')==""){
            $requestData['image'] = $product->image;
        }else{
            // delete old image
            $image_path= public_path('img/products/'.$product->image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $ext = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $image= $request->input('code').'.'.$ext;
            // upload image
            $path = public_path().'/img/products';
            $uplaod = $request->file('image')->move($path,$image);
            $requestData['image'] = $image;
        }

        if($request->file('big_image')==""){
            $requestData['big_image'] = $product->big_image;
        }else{
            // delete old image
            $big_image_path= public_path('img/products/'.$product->big_image);
            if(File::exists($big_image_path)){
                File::delete($big_image_path);
            }
            $big_ext = $request->file('big_image')->getClientOriginalExtension();
            // filename to store
            $big_image= $request->input('code').'_big.'.$big_ext;
            // upload image
            $path = public_path().'/img/products';
            $uplaod = $request->file('big_image')->move($path,$big_image);
            $requestData['big_image'] = $big_image;
        }

        $product->update($requestData);
        return redirect('administrator/products')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        // delete image
        $image_path= public_path('img/products/'.$product->image);

        if(File::exists($image_path)){
            File::delete($image_path);
        }

        if($product->has_details==1){
            $details = ProductDetail::where('product_id',$product->id);
            $details->delete();
        }

        $ingredients = Ingredient::where('product_id',$product->id);
        $ingredients->delete();

        $product->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}
