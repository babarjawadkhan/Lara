<?php

namespace App\Http\Resources\BloodGroup;

use Illuminate\Http\Resources\Json\Resource;

class BloodGroupResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['blood_type'=>$this->blood_type];
    }
}
