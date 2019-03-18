<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'slug_ar' => $this->slug_ar,
            'slug_en' => $this->slug_en,
            'description' => $this->description,
            'service' => $this->service,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'phone' => $this->phone,
            'fax' => $this->fax,
            'image' => $this->image,
            'imageLarge' => $this->imageLargeLink,
            'imageMedium' => $this->imageMediumLink,
            'imageThumb' => $this->imageThumbLink,
            'banner' => $this->banner,
            'bg' => $this->bg,
            'address' => $this->address,
            'area' => $this->area,
            'block' => $this->block,
            'street' => $this->street,
            'building' => $this->building,
            'floor' => $this->floor,
            'apartment' => $this->apartment,
            'country_name' => $this->country_name,
            'policy_ar' => $this->policy_ar,
            'policy_en' => $this->policy_en,
            'cancellation' => $this->cancellation,
            'keywords' => $this->keywords,
            'path' => $this->path,
            'website' => $this->website,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'twitter' => $this->twitter,
            'whatsapp' => $this->whatsapp,
            'iphone' => $this->iphone,
            'android' => $this->android,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'active' => $this->active,
            'country_id' => $this->country_id,
            'role_id' => $this->role_id,
            'merchant_id' => $this->merchant_id,
            'api_token' => $this->api_token,
            'role' => new RoleResource($this->whenLoaded('role')),
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
