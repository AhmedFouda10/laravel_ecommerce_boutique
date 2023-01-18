<?php

namespace App\Http\Requests\Modules\Category;

use Illuminate\Foundation\Http\FormRequest;

class AddCategory extends FormRequest
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
            'name'=>'required|min:4|unique:categories,name',
            'description'=>'nullable'
        ];
    }
}
