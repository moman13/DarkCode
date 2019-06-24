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
public function store(Request $request)
    {
        //create new categories
        $create = Category::create([
        'name'=>$request->name,
        //here if it main Category has 0 else has the id 
        'parent_id'=>request->parent_id
        ]);
    }

  
}
