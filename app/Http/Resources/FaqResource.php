<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FaqResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => trim(filter_var(strip_tags($this->content), FILTER_SANITIZE_STRING))
        ];
    }
}