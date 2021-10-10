<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UserHomeController@index');
Route::get('/brands/{brand_id}', 'UserProductController@brand_products');
Route::get('/categories/{category_id}', 'UserProductController@category_products');
Route::get('/categoryList', 'UserProductController@category_list');
Route::get('/productsList', 'UserProductController@product_list');

Route::get('/products/{id}', 'UserProductController@product_preview');
Route::post('/search', 'UserHomeController@search')->name('search');



Route::get('/aboutUs', function () {
    return view('about_us');
});
Route::get('/contactUs', function () {
    return view('contact');
});

Route::post('/search/{query}', 'UserHomeController@search');

Auth::routes(['register' => false, 'reset' => false]);

Route::group(['prefix' => 'administrator' ,'middleware' => ['auth'] ], function(){
   
    Route::get('/', 'AdminHomeController@index')->name('administrator');

    Route::resource('brands','BrandController');
    Route::resource('categories','CategoryController');
    Route::resource('products','ProductController');
    Route::resource('Product_details','ProductDetailsController');
    Route::resource('Product_ingredients','ProductIngredientsController');


    // best sellers routes
    Route::get('bestSellers','AdminHomeController@best_sellers');
    Route::post('add_best_seller', 'AdminHomeController@add_best_seller')->name('add_best_seller');
    Route::delete('remove_best_seller/{prod_id}', 'AdminHomeController@remove_best_seller')->name('remove_best_seller');

});
