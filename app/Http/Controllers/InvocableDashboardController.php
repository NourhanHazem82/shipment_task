<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class InvocableDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function __invoke(Request $request)
    {
        //
        $categories = Category::all();
         return view('dashboard',compact('categories'));
        // return view('dashboard');

    }
}
