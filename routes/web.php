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
  
use Illuminate\Http\Request;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("zoomart.ge", "MainController@main")->name("mainpage");
Route::get("more/{id}", "MainController@more")->name("moreproduct");
Route::post("store/comment", "MainController@comment")->name("storecomment");

Route::get("zoomart/{category}", "MainController@category")->name("categorychoose");


Route::get("cat/{id}", "CategoryController@index")->name("category");


#Admin Routes

Route::get("/admin/index", "ProductsController@index")->name("index");
Route::get("/admin/add", "ProductsController@add")->name("addproduct");
Route::post("/admin/store", "ProductsController@store")->name("storeproduct");
Route::post("/admin/delete", "ProductsController@delete")->name("deleteproduct");
Route::post("/admin/update", "ProductsController@update")->name("updateproduct");
Route::get("/admin/edit/{id}", "ProductsController@edit")->name("editproduct");

