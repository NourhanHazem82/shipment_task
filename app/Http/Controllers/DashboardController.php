<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class DashboardController extends Controller
{
    //
     public function __invoke(Request $request)
    {
        //
        $categories = Category::all();
         return view('dashboard',compact('categories'));
        // return view('dashboard');

    }


}
