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

    	$categories = Category::all();
    	$subcategories = Subcategory::all();
    	$products = Product::all();
	    return view('CategoryPage',compact('categories','subcategories','products'));
    }

  
}
