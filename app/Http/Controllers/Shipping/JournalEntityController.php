<?php

namespace App\Http\Controllers\Shipping;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shipment;
use App\Models\JournalEntity;
use App\Models\User;
use Auth;

class JournalEntityController extends Controller
{
    //
    public function showAlljournalentities(){
        $all_entities = JournalEntity::with('shipment')
        // ->where("user_id" , Auth::id())
        ->get();
        // dd($user_shipments[0]->product);
        return view('shipments.journal_entities_data' , compact('all_entities'));
    } 

}
