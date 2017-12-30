<?php

namespace App\Http\Resources\Donor;

use Illuminate\Http\Resources\Json\Resource;

class DonorResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['name'=>$this->name,
            'age'=>$this->age,
            'mobile'=>$this->mobile,
            'type_id'=>$this->type_id
            ];
    }
}
