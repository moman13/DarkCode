<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;
class CategoryController extends Controller
{
    public function index()
    {

    	$categories = Category::where('parent_id',0)->get();
    	$subcategories = Subcategory::all();
    	$products = Product::all();
	    return view('CategoryPage',compact('categories','subcategories','products'));
    }

  
}
