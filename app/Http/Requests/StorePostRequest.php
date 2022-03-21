<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|min:1|numeric',
            'weight' => 'required',
            'available' => 'required|numeric',
            'stock' => 'required|numeric',
            'discount' => 'required|numeric',
            'image' => 'required',
            'category_id' => 'required|numeric'
        ];
    }
}
