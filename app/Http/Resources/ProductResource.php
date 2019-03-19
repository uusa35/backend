<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'on_new' => $this->on_new,
            'home_delivery_availability' => $this->home_delivery_availability,
            'shipment_availability' => $this->shipment_availability,
            'delivery_time' => $this->delivery_time,
            'exclusive' => $this->exclusive,
            'on_sale' => $this->on_sale,
            'on_home' => $this->on_home,
            'is_available' => $this->is_available,
            'price' => $this->finalPrice,
            'convertedFinalPrice' => $this->convertedFinalPrice,
            'weight' => $this->weight,
            'sale_price' => $this->sale_price,
            'size_chart_image' => $this->size_chart_image,
            'description_en' => $this->description_en,
            'description_ar' => $this->description_ar,
            'notes_ar' => $this->notes_ar,
            'notes_en' => $this->notes_en,
            'keywords' => $this->keywords,
            'image' => $this->image,
            'video_url_one' => $this->video_url_one,
            'video_url_two' => $this->video_url_two,
            'start_sale' => $this->start_sale,
            'end_sale' => $this->end_sale,
            'active' => $this->active,
            'check_stock' => $this->check_stock,
            'is_hot_deal' => $this->is_hot_deal,
            'has_attributes' => $this->has_attributes,
            'qty' => $this->qty,
            'user_id' => $this->user_id,
            'brand_id' => $this->brand_id,
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'shipment_package_id' => $this->shipment_package_id,
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
