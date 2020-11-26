<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Comments;


class ProductsController extends Controller
{

    public function __construct(){
        $this->middleware("havepermition");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.adminshow", ["products"=>Products::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view("admin.addproduct");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Products::create([
            "title"=>$request->input("title"),
            "category"=>$request->input("category"),
            "brand"=>$request->input("brand"),
            "price"=>$request->input("price"),
            "category_id"=>$request->input("category_id"),
        ]);
        return redirect()->route("index");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Products::where("id", $id)->firstOrFail();
        return view("admin.editproduct",["product"=>$data]);
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
        Products::where("id", $request->input("id"))->update([
            "title"=>$request->input("title"),
            "category"=>$request->input("category"),
            "brand"=>$request->input("brand"),
            "price"=>$request->input("price"),
            "category_id"=>$request->input("category_id"),

        ]);
        return redirect()->route("index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $data = Products::where("id", $request->input("id"))->delete();
        return redirect()->back();

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
   
}



