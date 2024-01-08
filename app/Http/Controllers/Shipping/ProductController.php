<?php

namespace App\Http\Controllers\Shipping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shipment;
use App\Models\User;
use Auth;

class ProductController extends Controller
{
    //
     public function index($product_id)
    {
        $product = Product::where('id', $product_id)->first();
         return view('shipments.create_shipment',compact('product'));
    }

     public function submitShipment(Request $request , $product_id)
    {
        $unique_code = time().'-'.uniqid(true);
        $data = $request->all();
        $product = Product::where('id', $product_id)->first();
        // 'shipment_code' , 'total_quantity' , 'total_price' , 'user_id' , 'product_id'
        Shipment::create([
                'shipment_code'        => $unique_code,
                'total_quantity'        => $request['quantity'],
                'total_price'     => $product['price'] * $request['quantity'],
                'product_id'       => $product_id,
                'user_id'   => Auth::id(),
            ]);
            return redirect(route('categories.index'));
    }
}
