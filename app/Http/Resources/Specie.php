<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Specie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function with($request) {
        return [
            'version' => '1.0.0'
        ];
    }
}
