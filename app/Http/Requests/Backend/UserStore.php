<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'name' => 'required|min:3|max:200',
            'slug_ar' => 'required|min:3:max:200',
            'slug_en' => 'required|min:3:max:200',
            'description_ar' => 'nullable|min:3',
            'description_en' => 'nullable|min:3',
            'service_ar' => '',
            'service_en' => '',
            'email' => 'required|unique:users,email',
            'mobile' => 'nullable|numeric',
            'phone' => 'nullable|numeric',
            'fax' => 'nullable|numeric',
            'image' => 'required|image',
            'banner' => 'nullable|image',
            'bg' => 'nullable|image',
            'address' => 'nullable|min:3',
            'area' => 'nullable|string',
            'block' => 'nullable|numeric',
            'street' => 'nullable|max:10',
            'building' => 'nullable|max:10',
            'floor' => 'nullable|max:10',
            'apartment' => 'nullable|max:10',
            'country_name' => 'nullable|max:100',
            'policy_ar' => 'nullable|max:1000',
            'policy_en' => 'nullable|max:1000',
            'cancellation_ar' => 'nullable|max:1000',
            'cancellation_en' => 'nullable|max:1000',
            'keywords' => 'nullable|max:500',
            'path' => 'nullable|mimes:pdf',
            'website' => 'nullable|url',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'twitter' => 'nullable|url',
            'whatsapp' => 'nullable|numeric',
            'iphone' => 'nullable|url',
            'android' => 'nullable|url',
            'longitude' => 'nullable|max:100',
            'latitude' => 'nullable|max:100',
            'balance' => 'nullable|numeric',
            'on_home' => 'nullable|boolean',
            'active' => 'nullable|boolean',
            'country_id' => 'nullable|numeric|exists:countries:,id',
            'role_id' => 'required|numeric|roles:exists,id',
            'merchant_id' => 'nullable|max:200|min:3|unique:users,merchant_id',
        ];
    }
}
