<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['name', 'mobile', 'age', 'blood_group'];

    public function blood_groups()
    {

        return $this->belongsTo('App\BloodGroup', 'foreign_key');
    }
}
