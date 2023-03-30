<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowTabletResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'screen_size' => $this->screen_size,
            'ram' => $this->ram,
            'storage' => $this->storage,
            'mobile_network' => $this->mobile_network,
            'price' => $this->price,
            'manufacturer' => $this->manufacturer
        ];
    }
}
