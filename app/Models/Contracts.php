<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function contractdetails(){
        return $this-> hasMany(ContractDetail::class);
    }

    public function contractpayment(){
        return $this-> hasMany(ContractPayment::class);
    }
}
