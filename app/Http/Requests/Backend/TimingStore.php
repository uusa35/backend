<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TimingStore extends FormRequest
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
        dd(request()->all());
        return [
            'start' => 'required',
            'end' => 'required',
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'multi_booking' => 'required|boolean',
        ];
    }
}
