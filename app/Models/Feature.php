<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    public function propertyfeatures(){
        return $this-> hasMany(PropertyFeature::class);
    }

}
