<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            "producto_id" => $this->id,
            "descripcion" => $this->descripcion,
            "locales" => $this->whenLoaded(
                'locales',
                LocalResource::collection($this->locales), null
            )
        ];
    }
}
