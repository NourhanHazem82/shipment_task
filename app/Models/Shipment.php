<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipment_code' , 'total_quantity' , 'total_price' , 'user_id' , 'product_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); //Pk
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); //Pk
    }
}
