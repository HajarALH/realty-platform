<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
   
    public function propretyAttachments(){
        return $this-> hasMany(PropretyAttachment::class);
    }

    public function propretyFeatures(){
        return $this-> hasMany(PropretyFeature::class);
    }

    public function rooms(){
        return $this-> hasMany(Room::class);
    }

    public function homes(){
        return $this-> hasMany(Home::class);
    }

    public function flats(){
        return $this-> hasMany(Flat::class);
    }

    public function contracts(){
        return $this-> hasMany(Contract::class);
    }

    public function maintaincerequests(){
        return $this-> hasMany(MaintainceRequest::class);
    }
    public function cites(){
        return $this-> hasMany(City::class);
    }

    public function propertygroup()
    {
        return $this->belongsTo(PropertyGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
