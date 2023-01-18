<?php

namespace App\Http\Requests\Modules\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddProduct extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:4|unique:products,name',
            'description'=>'required',
            'image' =>'nullable',
            'price'=>'required|numeric',
            'quantity' => 'required|digits_between:1,99999999999999',
            'category_id'=>'required',
            'brand_id'=>'required'
        ];
    }
}
