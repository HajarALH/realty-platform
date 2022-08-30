<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintainceRequest extends Model
{
    use HasFactory;

    public function properties(){
        return $this-> hasMany(Property::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
} 

