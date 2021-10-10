<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BestSeller;
use DB;

class UserHomeController extends Controller
{
    public function index(){
        $best_sellers = BestSeller::all();
        return view('welcome',compact('best_sellers'));
    }

    public function search(Request $request){
        $query = $request->input('search');
            $search = DB::table('products')
                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                        ->join('categories', 'products.category_id', '=', 'categories.id')
                        ->select('products.*','categories.name as cat_name')
                        ->where('products.code', 'like', '%' . $query . '%')
                        ->orWhere('products.name', 'like', '%' . $query . '%')
                        ->get();
        return view('search',compact('search'));
        

    }
}
