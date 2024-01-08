<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Shipment;

class ShipmentHasProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity' , 'price' , 'shipment_id' , 'product_id'
    ];

    public function shipment_id()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id'); //Pk
    }

    public function product_id()
    {
        return $this->belongsTo(Product::class, 'product_id'); // i think it is best to be hasMany
    }
}
