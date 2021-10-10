<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\Category;
use App\Ingredient;
use App\ProductDetail;

class UserProductController extends Controller
{
    public function brand_products($brand_id){
        $brand= Brand::find($brand_id);
        $products = Product::where('brand_id',$brand_id)->with('product_detail')->paginate(12);
        return view('brand_products',compact('brand','products'));
    }

    public function category_products($category_id){
        $category= Category::find($category_id);
        $products = Product::where('category_id',$category_id)->with('product_detail')->paginate(12);
        //return response()->json($products);
        return view('category_products',compact('category','products'));
    }

    public function category_list(){
        $categories= Category::all();
        return view('category_list',compact('categories'));
    }

    public function product_preview($id){
        $product= Product::find($id);
        $components = Ingredient::where('product_id',$id)->get();
        $details = ProductDetail::where('product_id',$id)->first();
        return view('product_preview',compact('product','components','details'));
    }
    
    public function product_list(){
        $categories = Category::all();
        $products = Product::all();
        return view('products_list',compact('products','categories'));
    }
}
