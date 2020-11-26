<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Comments;

class MainController extends Controller
{
    public function more($id)
    {
        $data = Products::where("id", $id)->firstOrFail();
        $comments = Comments::where("Product_id", $id)->get();
        return view("guest.product", ["product"=>$data, "comments"=>$comments]);
    }

    public function main()
    {
        return view("guest.main", ["products"=>Products::get()]);
    }

     
    
    public function comment(Request $request)
    {
        Comments::create([
            "product_id"=>$request->input("product_id"),
            "comment"=>$request->input("comment")

        ]); 
        return redirect()->back();
    }

    public function category($category)
    {
        
    }
    
}
