<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Donor;

class BloodGroup extends Model
{
    protected $fillable=['blood_type'];
    public function donor()
    {

        return $this->hasMany('App\Donor');
    }
}
