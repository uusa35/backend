<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'imageThumb' => $this->imageThumbLink,
            'role' => new RoleLightResource($this->whenLoaded('role')),
            'products' => ProductLightResource::collection($this->whenLoaded('products')),
            'services' => ServiceLightResource::collection($this->whenLoaded('services')),
            'orders' => OrderLightResource::collection($this->whenLoaded('orders')),
            'branches' => BranchLightResource::collection($this->whenLoaded('branches')),
            'coupons' => CouponLightResource::collection($this->whenLoaded('coupons')),
            'product_favorites' => ProductLightResource::collection($this->whenLoaded('product_favorites')),
            'service_favorites' => ServiceLightResource::collection($this->whenLoaded('service_favorites')),
            'images' => ImageLightResource::collection($this->whenLoaded('images')),
            'slides' => SlideLightResource::collection($this->whenLoaded('slides')),
            'notifications' => NotificationLightResource::collection($this->whenLoaded('notificationAlerts')),
            'tags' => TagLightResource::collection($this->whenLoaded('tags')),
            'collections' => CollectionLightResource::collection($this->whenLoaded('collections')),
            'ratings' => RatingLightResource::collection($this->whenLoaded('ratings')),
            'areas' => AreaLightResource::collection($this->whenLoaded('areas')),
            'country' => CountryLightResource::collection($this->whenLoaded('country')),
        ];
    }
}
