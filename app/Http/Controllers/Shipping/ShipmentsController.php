<?php

namespace App\Http\Controllers\Shipping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shipment;
use App\Models\JournalEntity;
use App\Models\User;
use Auth;

class ShipmentsController extends Controller
{
    //
    public function showAllShipments(){
        $status = ['Pending', 'Progress', 'Done'];
        $user_shipments = Shipment::with('product')
        ->where("user_id" , Auth::id())
        ->get();
        // dd($user_shipments[0]->product);
        return view('shipments.shipment_data' , compact('user_shipments' , 'status'));
    } 

    public function edit($shipment_id){
        $shipment = Shipment::with('product')->where('id' , $shipment_id)
        ->first();
        return view('shipments.edit_shipment' , compact('shipment'));
    }

    public function update($shipment_id , $last_status , $total_price , Request $request){
        $data = $request->all()['status'];  

        if($data == "Progress" && $last_status == "Pending"){
            $this->updateStatus($shipment_id , $last_status , $data);
        }
        elseif ($data == "Pending" && $last_status == "Progress") {
            $this->updateStatus($shipment_id , $last_status , $data);
        }
        elseif ($data == "Done" && $last_status == "Progress") {
            $this->journalEntity($shipment_id , $total_price);
            $this->updateStatus($shipment_id , $last_status , $data);
        }
        elseif ($data ==  $last_status ) {
            return redirect(route('categories.myShipments'))->with('message-success',"No status change");
        }
        else{
            return redirect()->back()->withErrors(['Error Status moving ']);

        }
            return redirect(route('categories.myShipments'));
    }

    public function updateStatus($shipment_id , $last_status , $data){
        $shipment = Shipment::where('id', $shipment_id)->update
            ([
                'status' => $data
            ]);
    }

    public function journalEntity($shipment_id , $total_price){
        // $table->enum('type', ['Debit Cash', 'Credit Revenue', 'Credit Payable']);
        journalEntity::create([
                'type'               => "Debit Cash",
                'shipment_id'        => $shipment_id,
                'amount'             => $total_price * 1,
                'user_id'            => Auth::id(),
            ]);
        journalEntity::create([
                'type'               => "Credit Revenue",
                'shipment_id'        => $shipment_id,
                'amount'             => $total_price * 0.2,
                'user_id'            => Auth::id(),
            ]);
        journalEntity::create([
                'type'               => "Credit Payable",
                'shipment_id'        => $shipment_id,
                'amount'             => $total_price * 0.8,
                'user_id'            => Auth::id(),
            ]);
    }
}
