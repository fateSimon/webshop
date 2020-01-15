<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'price'=> 'numeric|required',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'price.numeric' => __('product.numeric'),
        ];
    }
}
