<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PresentacionResource extends JsonResource
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

        // dd($this->pivot->local_id);
        return [
            // "presentaciones" => $this->presentacionesProducto(2)
            "presentaciones" => $this->presentaciones
        ];
    }
}
