<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class CategoryController extends Controller
{
    public function index($id)

    {
    	return Products::where("id", $id)->get();
    }
}
