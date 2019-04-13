<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProductStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku' => 'required|min:2',
            'name_ar' => 'required:min:3|max:200',
            'name_en' => 'required|min:3|max:200',
            'has_attributes' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'shipment_id' => 'required|exists:shipment_packages,id',
            'brand' => 'required|exists:brands,id',
            'image' => 'required|image',
            'categories' => 'required|array',
            'price' => 'required|numeric|min:0.5|max:999',
            'weight' => 'required|numeric|min:0.1|max:10',
            'on_sale' => 'boolean',
            'on_sale_on_homepage' => 'boolean',
            'on_homepage' => 'boolean',
            'sale_price' => 'numeric|nullable|min:0.5|max:999',
            'size_chart_image' => 'image|nullable',
            'description_en' => 'min:3|nullable',
            'description_ar' => 'min:3|nullable',
            'notes_ar' => 'min:3|nullable',
            'notes_en' => 'min:3|nullable',
            'size_chart_image' => 'nullable|image',
            'start_sale' => 'date|nullable',
            'end_sale' => 'required',
            'active' => 'required|boolean',
            'categories' => 'required|array',
            'tags' => 'required|array',
            'video_url' => 'nullable|url',
            'video_url_one' => 'nullable|url',
            'video_url_two' => 'nullable|url',
            'color_id' => 'nullable|exists:colors,id',
            'size_id' => 'nullable|exists:sizes,id'
        ];
    }
}
