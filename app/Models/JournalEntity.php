<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shipment;
class JournalEntity extends Model
{
    use HasFactory;
    protected $fillable = [
        'type' , 'shipment_id' , 'amount' , 'user_id'
    ];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id'); //Pk
    }

}
