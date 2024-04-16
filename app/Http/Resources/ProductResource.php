<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>  $this->id,
            'product_name' => $this->product_name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image,
//            'reviews' => new ReviewResource($this->whenLoaded('reviews')),
            'category' => new CategoryResource($this->whenLoaded('category'))

        ];
    }
}
