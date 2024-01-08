<?php

namespace App\Http\Controllers\shipping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    //
     public function index()
    {
        $categories = Category::all();
         return view('shipments.categories',compact('categories'));
    }

     public function getProducts($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();
        // dd($products[0]->product_name);
         return view('shipments.products_of_category',compact('products'));
    }

    
}
