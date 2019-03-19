<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductLightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'name' => $this->name,
            'on_new' => $this->on_new,
            'exclusive' => $this->exclusive,
            'isOnSale' => $this->isOnSale,
            'on_home' => $this->on_home,
            'is_available' => $this->is_available,
            'finalPrice' => $this->finalPrice,
            'convertedFinalPrice' => $this->convertedFinalPrice,
            'weight' => $this->weight,
            'description' => $this->description,
            'notes' => $this->notes,
            'image' => $this->imageThumbLink,
            'is_hot_deal' => $this->is_hot_deal,
            'has_attributes' => $this->has_attributes,
            'qty' => $this->qty,
            'user' => new UserLightResource($this->whenLoaded('user')),
            'product_attributes' => ProductAttributeLightResource::collection($this->whenLoaded('product_attributes')),
            'shipment_package' => ShipmentPackageLightResource::collection($this->whenLoaded('shipment_package')),
            'colors' => ColorLightResource::collection($this->whenLoaded('colors')),
            'color' => new ColorLightResource($this->whenLoaded('color')),
            'size' => new ColorLightResource($this->whenLoaded('size')),
            'sizes' => SizeLightResource::collection($this->whenLoaded('sizes')),
            'categories' => CategoryLightResource::collection($this->whenLoaded('categories')),
            'brands' => BrandLightResource::collection($this->whenLoaded('brands')),
            'images' => ImageLightResource::collection($this->whenLoaded('images')),
            'slides' => SlideLightResource::collection($this->whenLoaded('slides')),
            'tags' => TagLightResource::collection($this->whenLoaded('tags')),
            'collections' => CollectionLightResource::collection($this->whenLoaded('collections')),
        ];
    }
}
