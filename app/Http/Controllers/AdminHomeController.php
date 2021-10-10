<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BestSeller;
use App\PopularProduct;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    //best sellers
    public function best_sellers()
    {
        $best_sellers = BestSeller::all();
        return view('admin.best_sellers',compact('best_sellers'));
    }

    public function add_best_seller(Request $request){
        BestSeller::create($request->all());
        return redirect()->back()->with('success','Added successfully');
    }

    public function remove_best_seller($id)
    {
        $best_seller = BestSeller::find($id);
        $best_seller->delete();
        return redirect()->back()->with('success','Removed successfully');
    }

}
